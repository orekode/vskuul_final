<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
require_once(__DIR__ . '/../../config.php'); // Moodle config
require_once($CFG->libdir . '/moodlelib.php'); // Moodle library

// Debugging setup
@error_reporting(E_ALL | E_STRICT);
@ini_set('display_errors', '1');
$CFG->debug = DEBUG_DEVELOPER;
$CFG->debugdisplay = true;

// Pagination parameters
$page = optional_param('page', 1, PARAM_INT);
$limit = optional_param('limit', 10, PARAM_INT);
$offset = ($page - 1) * $limit;

// Debug params
echo "Page: $page, Limit: $limit, Offset: $offset";

global $DB;

try {
    // Query courses with pagination
    $courses = $DB->get_records_sql(
        "SELECT 
            c.id AS course_id,
            c.fullname AS course_name,
            c.shortname AS course_shortname,
            c.summary AS course_summary,
            c.startdate,
            c.enddate,
            f.filename AS course_image_filename,
            f.contenthash AS course_image_hash
        FROM {course} AS c
        LEFT JOIN {files} AS f 
            ON f.itemid = c.id
            AND f.component = 'course'
            AND f.filearea = 'overviewfiles'
            AND f.filename != '.'
        ORDER BY c.fullname ASC
        LIMIT :limit OFFSET :offset",
        ['limit' => $limit, 'offset' => $offset]
    );

    if (!$courses) {
        echo "No courses found.";
        exit;
    }

    // Add image URLs
    foreach ($courses as $course) {
        $context = context_course::instance($course->course_id);
        $course->image_url = !empty($course->course_image_hash)
            ? moodle_url::make_pluginfile_url(
                $context->id,
                'course',
                'overviewfiles',
                $course->course_id,
                '/',
                $course->course_image_filename
              )->out()
            : null;
    }

    // Output courses as JSON
    header('Content-Type: application/json');
    echo json_encode(array_values($courses));
} catch (Exception $e) {
    // Catch and display errors
    echo "Error: " . $e->getMessage();
}