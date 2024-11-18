Iomad School Management System - User Guide
Introduction

The Iomad School Management System is a platform that allows vskuul to register other schools as companies, provide login details, and handle multitenancy for effective management and collaboration. This document serves as a guide for administrators and users.
Features

    Multitenancy Support: Each registered school operates independently within its tenant.
    Company Registration: Easily register new schools as companies.
    Role-Based Access Control: Assign roles and permissions for administrators, teachers, and students.
    Centralized Management: vskuul can oversee all schools while maintaining tenant boundaries.

Getting Started
System Requirements

    A web server running PHP (version 7.4 or higher).
    MySQL or PostgreSQL database.
    A stable internet connection.

Installation

    Install Moodle with the Iomad plugin:
        Download Moodle from the official site.
        Install the Iomad plugin available here.
    Configure the database and web server settings as per the Moodle and Iomad documentation.
    Set up the main administrator account for vskuul.

User Roles and Permissions
vskuul Administrator

    Responsibilities:
        Register new schools as companies.
        Manage overall system settings and configurations.
        Provide support to tenant administrators.
    Access: Full system access.

Company Administrator (School Admin)

    Responsibilities:
        Manage users within their school.
        Assign roles (teachers, students, etc.).
        Oversee content and courses for their school.
    Access: Restricted to their school (tenant).

Teacher

    Responsibilities:
        Manage course content.
        Monitor and grade student performance.
    Access: Limited to assigned courses.

Student

    Responsibilities:
        Access courses and complete assignments.
        Participate in forums and activities.
    Access: Limited to enrolled courses.

Using the System
Step 1: Registering a New School

    Log in as the vskuul Administrator.
    Navigate to Site Administration > Companies > Add New Company.
    Fill in the school details:
        Company Name
        Administrator Email
        Contact Information
    Click Save to create the new school.

Step 2: Providing Login Details

    After creating the company, navigate to Users > Accounts > Add New User within the company's dashboard.
    Add the school admin’s details and assign the Company Administrator role.
    Provide the login details to the school admin.

Step 3: Managing Companies

    Go to Site Administration > Companies > Manage Companies.
    Select a company to view or modify details, such as:
        User accounts
        Courses
        Subscription plans (if any).

Multitenancy Management
Customizing Tenant Settings

    Navigate to Companies > Settings.
    Customize themes, logos, and email templates for each school.

Monitoring Activity

    Use Reports > Site-Wide Reports to track:
        Active users.
        Course progress.
        Login statistics.

Troubleshooting
Common Issues

    Login Problems: Ensure the correct username and password were provided.
    Access Issues: Verify that the user role and permissions are correctly assigned.
    Tenant Isolation Errors: Check the company-specific settings to ensure proper configuration.

Support

For technical issues, contact vskuul support at support@vskuul.com.
Best Practices

    Regularly update the platform and plugins for security.
    Back up the database frequently to prevent data loss.
    Train school admins to manage their tenants effectively.

FAQs
1. How can I reset a user’s password?

    Go to Users > Browse Users, select the user, and click Reset Password.

2. Can schools customize their dashboards?

    Yes, the company admin can customize the dashboard via Site Administration > Appearance > Dashboard.

3. How do I delete a school?

    Navigate to Companies > Manage Companies, select the school, and click Delete.

This document provides a comprehensive overview of the Iomad School Management System and serves as a step-by-step guide for administrators and users. If you need further assistance, refer to the official Iomad documentation or contact support.
