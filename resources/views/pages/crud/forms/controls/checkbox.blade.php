@extends('layouts.index')
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
        @slot('breadcrumb')
            @slot('li_1')
                Crud
            @endslot
            @slot('li_2')
                Forms
            @endslot
            @slot('li_3')
                Controls
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Basic checkbox</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Form-->
                        <form class="form">
                            <div class="form-group">
                                <label>Default Checkboxes</label>
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                        <input type="checkbox" name="Checkboxes1" />
                                        <span></span>Default</label>
                                    <label class="checkbox checkbox-disabled">
                                        <input type="checkbox" disabled="disabled" checked="checked" name="Checkboxes1" />
                                        <span></span>Disabled</label>
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="Checkboxes1" />
                                        <span></span>Checked</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Inline Checkboxes</label>
                                <div class="checkbox-inline">
                                    <label class="checkbox">
                                        <input type="checkbox" name="Checkboxes2" />
                                        <span></span>Option 1</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="Checkboxes2" />
                                        <span></span>Option 2</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="Checkboxes2" />
                                        <span></span>Option 3</label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Inline Checkboxes</label>
                                <div class="checkbox-inline">
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="Checkboxes3" />
                                        <span></span>Option 1</label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="Checkboxes3" />
                                        <span></span>Option 2</label>
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="Checkboxes3" />
                                        <span></span>Option 3</label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Large Size</label>
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-lg">
                                        <input type="checkbox" checked="checked" name="Checkboxes3_1" />
                                        <span></span>Option 1</label>
                                    <label class="checkbox checkbox-lg">
                                        <input type="checkbox" name="Checkboxes3_1" />
                                        <span></span>Option 2</label>
                                    <label class="checkbox checkbox-lg">
                                        <input type="checkbox" name="Checkboxes3_1" />
                                        <span></span>Option 3</label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Square Style</label>
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-square">
                                        <input type="checkbox" checked="checked" name="Checkboxes13_1" />
                                        <span></span>Option 1</label>
                                    <label class="checkbox checkbox-square">
                                        <input type="checkbox" name="Checkboxes13_1" />
                                        <span></span>Option 2</label>
                                    <label class="checkbox checkbox-square">
                                        <input type="checkbox" name="Checkboxes13_1" />
                                        <span></span>Option 3</label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Rounded Style</label>
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-rounded">
                                        <input type="checkbox" checked="checked" name="Checkboxes15_1" />
                                        <span></span>Option 1</label>
                                    <label class="checkbox checkbox-rounded">
                                        <input type="checkbox" name="Checkboxes15_1" />
                                        <span></span>Option 2</label>
                                    <label class="checkbox checkbox-rounded">
                                        <input type="checkbox" name="Checkboxes15_1" />
                                        <span></span>Option 3</label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Code example-->
                        <div class="example-code mt-5">
                            <div class="example-highlight">
                                <pre style="height:300px">
<code class="language-html">
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Default Checkboxes&lt;/label&gt;
                        &lt;div class="checkbox-list"&gt;
                            &lt;label class="checkbox"&gt;
                                &lt;input type="checkbox" name="Checkboxes1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Default
                            &lt;/label&gt;
                            &lt;label class="checkbox checkbox-disabled"&gt;
                                &lt;input type="checkbox" disabled="disabled" checked="checked" name="Checkboxes1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Disabled
                            &lt;/label&gt;
                            &lt;label class="checkbox"&gt;
                                &lt;input type="checkbox" checked="checked" name="Checkboxes1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Checked
                            &lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Inline Checkboxes&lt;/label&gt;
                        &lt;div class="checkbox-inline"&gt;
                            &lt;label class="checkbox"&gt;
                                &lt;input type="checkbox" name="Checkboxes2"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 1
                            &lt;/label&gt;
                            &lt;label class="checkbox"&gt;
                                &lt;input type="checkbox" name="Checkboxes2"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 2
                            &lt;/label&gt;
                            &lt;label class="checkbox"&gt;
                                &lt;input type="checkbox" name="Checkboxes2"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 3
                            &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Inline Checkboxes&lt;/label&gt;
                        &lt;div class="checkbox-inline"&gt;
                            &lt;label class="checkbox"&gt;
                                &lt;input type="checkbox" checked="checked" name="Checkboxes3"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 1
                            &lt;/label&gt;
                            &lt;label class="checkbox"&gt;
                                &lt;input type="checkbox" name="Checkboxes3"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 2
                            &lt;/label&gt;
                            &lt;label class="checkbox"&gt;
                                &lt;input type="checkbox" checked="checked" name="Checkboxes3"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 3
                            &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Large Size&lt;/label&gt;
                        &lt;div class="checkbox-inline"&gt;
                            &lt;label class="checkbox checkbox-lg"&gt;
                                &lt;input type="checkbox" checked="checked" name="Checkboxes3_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 1
                            &lt;/label&gt;
                            &lt;label class="checkbox checkbox-lg"&gt;
                                &lt;input type="checkbox" name="Checkboxes3_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 2
                            &lt;/label&gt;
                            &lt;label class="checkbox checkbox-lg"&gt;
                                &lt;input type="checkbox" name="Checkboxes3_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 3
                            &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Square Style&lt;/label&gt;
                        &lt;div class="checkbox-inline"&gt;
                            &lt;label class="checkbox checkbox-square"&gt;
                                &lt;input type="checkbox" checked="checked" name="Checkboxes13_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 1
                            &lt;/label&gt;
                            &lt;label class="checkbox checkbox-square"&gt;
                                &lt;input type="checkbox" name="Checkboxes13_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 2
                            &lt;/label&gt;
                            &lt;label class="checkbox checkbox-square"&gt;
                                &lt;input type="checkbox" name="Checkboxes13_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 3
                            &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Rounded Style&lt;/label&gt;
                        &lt;div class="checkbox-inline"&gt;
                            &lt;label class="checkbox checkbox-rounded"&gt;
                                &lt;input type="checkbox" checked="checked" name="Checkboxes15_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 1
                            &lt;/label&gt;
                            &lt;label class="checkbox checkbox-rounded"&gt;
                                &lt;input type="checkbox" name="Checkboxes15_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 2
                            &lt;/label&gt;
                            &lt;label class="checkbox checkbox-rounded"&gt;
                                &lt;input type="checkbox" name="Checkboxes15_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 3
                            &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                    &lt;/div&gt;
                    </code>
</pre>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Horizontal Form</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Form-->
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Checkboxes</label>
                                <div class="col-9 col-form-label">
                                    <div class="checkbox-list">
                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes4" />
                                            <span></span>Default</label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked="checked" name="Checkboxes4" />
                                            <span></span>Checked</label>
                                        <label class="checkbox checkbox-disabled">
                                            <input type="checkbox" disabled="disabled" name="Checkboxes4" />
                                            <span></span>Disabled</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Inline Checkboxes</label>
                                <div class="col-9 col-form-label">
                                    <div class="checkbox-inline">
                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes5" />
                                            <span></span>Option 1</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes5" />
                                            <span></span>Option 2</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes5" />
                                            <span></span>Option 3</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Inline Checkboxes</label>
                                <div class="col-9 col-form-label">
                                    <div class="checkbox-inline">
                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes6" />
                                            <span></span>Option 1</label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked="checked" name="Checkboxes6" />
                                            <span></span>Option 2</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes6" />
                                            <span></span>Option 3</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Code example-->
                        <div class="example-code mt-5">
                            <div class="example-highlight">
                                <pre style="height:300px">
<code class="language-html">
                    &lt;form class="form"&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Checkboxes&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="checkbox-list"&gt;
                                    &lt;label class="checkbox"&gt;
                                        &lt;input type="checkbox"  name="Checkboxes4"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="checkbox"&gt;
                                        &lt;input type="checkbox" checked="checked" name="Checkboxes4"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-disabled"&gt;
                                        &lt;input type="checkbox" disabled="disabled" name="Checkboxes4"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Disabled
                                    &lt;/label&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Inline Checkboxes&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="checkbox-inline"&gt;
                                    &lt;label class="checkbox"&gt;
                                        &lt;input type="checkbox" name="Checkboxes5"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 1
                                    &lt;/label&gt;
                                    &lt;label class="checkbox"&gt;
                                        &lt;input type="checkbox" name="Checkboxes5"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 2
                                    &lt;/label&gt;
                                    &lt;label class="checkbox"&gt;
                                        &lt;input type="checkbox" name="Checkboxes5"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 3
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Inline Checkboxes&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="checkbox-inline"&gt;
                                    &lt;label class="checkbox"&gt;
                                        &lt;input type="checkbox" name="Checkboxes6"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 1
                                    &lt;/label&gt;
                                    &lt;label class="checkbox"&gt;
                                        &lt;input type="checkbox" checked="checked" name="Checkboxes6"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 2
                                    &lt;/label&gt;
                                    &lt;label class="checkbox"&gt;
                                        &lt;input type="checkbox" name="Checkboxes6"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 3
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                    </code>
</pre>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Theme Colors</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Form-->
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Success State</label>
                                <div class="col-9 col-form-label">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-success">
                                            <input type="checkbox" name="Checkboxes5" />
                                            <span></span>Default</label>
                                        <label class="checkbox checkbox-success">
                                            <input type="checkbox" name="Checkboxes5" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="checkbox checkbox-success checkbox-disabled">
                                            <input type="checkbox" name="Checkboxes5" disabled="disabled" />
                                            <span></span>Disabled</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Primary State</label>
                                <div class="col-9 col-form-label">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" name="Checkboxes11" />
                                            <span></span>Default</label>
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" name="Checkboxes11" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="checkbox checkbox-primary checkbox-disabled">
                                            <input type="checkbox" name="Checkboxes11" disabled="disabled" />
                                            <span></span>Disabled</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Danger State</label>
                                <div class="col-9 col-form-label">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-danger">
                                            <input type="checkbox" name="Checkboxes12" />
                                            <span></span>Default</label>
                                        <label class="checkbox checkbox-danger">
                                            <input type="checkbox" name="Checkboxes12" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="checkbox checkbox-danger checkbox-disabled">
                                            <input type="checkbox" name="Checkboxes12" disabled="disabled" />
                                            <span></span>Disabled</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Code example-->
                        <div class="example-code mt-5">
                            <div class="example-highlight">
                                <pre style="height:300px">
<code class="language-html">
                    &lt;form class="form"&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Success State&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="checkbox-inline"&gt;
                                    &lt;label class="checkbox checkbox-success"&gt;
                                        &lt;input type="checkbox" name="Checkboxes5"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-success"&gt;
                                        &lt;input type="checkbox" name="Checkboxes5" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-success checkbox-disabled"&gt;
                                        &lt;input type="checkbox" name="Checkboxes5" disabled="disabled"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Disabled
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Primary State&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="checkbox-inline"&gt;
                                    &lt;label class="checkbox checkbox-primary"&gt;
                                        &lt;input type="checkbox" name="Checkboxes11"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-primary"&gt;
                                        &lt;input type="checkbox" name="Checkboxes11" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-primary checkbox-disabled"&gt;
                                        &lt;input type="checkbox" name="Checkboxes11" disabled="disabled"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Disabled
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Danger State&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="checkbox-inline"&gt;
                                    &lt;label class="checkbox checkbox-danger"&gt;
                                        &lt;input type="checkbox" name="Checkboxes12"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-danger"&gt;
                                        &lt;input type="checkbox" name="Checkboxes12" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-danger checkbox-disabled"&gt;
                                        &lt;input type="checkbox" name="Checkboxes12" disabled="disabled"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Disabled
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                    </code>
</pre>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Outline Tipe</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Form-->
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Outline Default</label>
                                <div class="col-9 col-form-label">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-outline checkbox-success">
                                            <input type="checkbox" name="Checkboxes15" />
                                            <span></span>Default</label>
                                        <label class="checkbox checkbox-outline checkbox-success">
                                            <input type="checkbox" name="Checkboxes15" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="checkbox checkbox-outline checkbox-success checkbox-disabled">
                                            <input type="checkbox" name="Checkboxes15" disabled="disabled" />
                                            <span></span>Disabled</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Outline 2x</label>
                                <div class="col-9 col-form-label">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                            <input type="checkbox" name="Checkboxes16" />
                                            <span></span>Default</label>
                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                            <input type="checkbox" name="Checkboxes16" checked="checked" />
                                            <span></span>Checked</label>
                                        <label
                                            class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary checkbox-disabled">
                                            <input type="checkbox" name="Checkboxes16" disabled="disabled" />
                                            <span></span>Disabled</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Code example-->
                        <div class="example-code mt-5">
                            <div class="example-highlight">
                                <pre style="height:300px">
<code class="language-html">
                    &lt;form class="form"&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Outline Default&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="checkbox-inline"&gt;
                                    &lt;label class="checkbox checkbox-outline checkbox-success"&gt;
                                        &lt;input type="checkbox" name="Checkboxes15"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-outline checkbox-success"&gt;
                                        &lt;input type="checkbox" name="Checkboxes15" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-outline checkbox-success checkbox-disabled"&gt;
                                        &lt;input type="checkbox" name="Checkboxes15" disabled="disabled"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Disabled
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Outline 2x&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="checkbox-inline"&gt;
                                    &lt;label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary"&gt;
                                        &lt;input type="checkbox" name="Checkboxes16"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary"&gt;
                                        &lt;input type="checkbox" name="Checkboxes16" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary checkbox-disabled"&gt;
                                        &lt;input type="checkbox" name="Checkboxes16" disabled="disabled"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Disabled
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                    </code>
</pre>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection
