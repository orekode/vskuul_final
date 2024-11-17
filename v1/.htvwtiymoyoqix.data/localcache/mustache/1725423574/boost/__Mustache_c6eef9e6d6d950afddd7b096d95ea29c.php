<?php

class __Mustache_c6eef9e6d6d950afddd7b096d95ea29c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="book p-4">
';
        $buffer .= $indent . '    <div class="text-right">';
        $value = $this->resolveValue($context->find('printdialoglink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="text-center pb-3 book_title">';
        $value = $this->resolveValue($context->find('booktitle'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="book_info w-100 pt-6 d-inline-block">
';
        $buffer .= $indent . '        <div class="w-50 float-left">
';
        $buffer .= $indent . '            <table>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section6352e994d4253e0dee2a6c8b8054fabc($context, $indent, $value);
        $buffer .= ':
';
        $buffer .= $indent . '                    </td>
';
        $buffer .= $indent . '                    <td class="pl-3">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('sitelink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section935207dbb135155d9033286c71d96189($context, $indent, $value);
        $buffer .= ':
';
        $buffer .= $indent . '                    </td>
';
        $buffer .= $indent . '                    <td class="pl-3">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('coursename'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionD27115497abe622f62e52617071c05fb($context, $indent, $value);
        $buffer .= ':
';
        $buffer .= $indent . '                    </td>
';
        $buffer .= $indent . '                    <td class="pl-3">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('modulename'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '            </table>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="w-50 float-left">
';
        $buffer .= $indent . '            <table class="float-right">
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionA165670204dee01521977b35ed6073eb($context, $indent, $value);
        $buffer .= ':
';
        $buffer .= $indent . '                    </td>
';
        $buffer .= $indent . '                    <td class="pl-3">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionC82794fede2c493af84f404702c7b9db($context, $indent, $value);
        $buffer .= ':
';
        $buffer .= $indent . '                    </td>
';
        $buffer .= $indent . '                    <td class="pl-3">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('printdate'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '            </table>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('bookintro');
        $buffer .= $this->sectionB90fa7c71df036db4f51a972bbd58622($context, $indent, $value);
        $buffer .= $indent . '    <div class="w-100">
';
        $buffer .= $indent . '        <div class="py-5">';
        $value = $this->resolveValue($context->find('toc'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="w-100">
';
        $value = $context->find('chapters');
        $buffer .= $this->section206c8ba5b4c5e876972aa4e7a2f943f2($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6352e994d4253e0dee2a6c8b8054fabc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' site ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' site ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section935207dbb135155d9033286c71d96189(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' course ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD27115497abe622f62e52617071c05fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' modulename, mod_book ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' modulename, mod_book ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA165670204dee01521977b35ed6073eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' printedby, booktool_print ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' printedby, booktool_print ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC82794fede2c493af84f404702c7b9db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' printdate, booktool_print ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' printdate, booktool_print ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b257672dfa14e719ae30834047be479(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' description ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' description ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB90fa7c71df036db4f51a972bbd58622(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="w-100 book_description">
        <div class="py-5">
            <h2 class="text-center pb-5">{{#str}} description {{/str}}</h2>
             <p class="book_summary">{{{ bookintro }}}</p>
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="w-100 book_description">
';
                $buffer .= $indent . '        <div class="py-5">
';
                $buffer .= $indent . '            <h2 class="text-center pb-5">';
                $value = $context->find('str');
                $buffer .= $this->section0b257672dfa14e719ae30834047be479($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '             <p class="book_summary">';
                $value = $this->resolveValue($context->find('bookintro'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3807ca2d0ecd890ebd2d71943bbcf62a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="pb-5">
            {{{ content }}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="pb-5">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section206c8ba5b4c5e876972aa4e7a2f943f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#visible }}
            <div class="pb-5">
            {{{ content }}}
            </div>
        {{/visible}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('visible');
                $buffer .= $this->section3807ca2d0ecd890ebd2d71943bbcf62a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
