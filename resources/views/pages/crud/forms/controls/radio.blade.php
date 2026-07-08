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
                        <h3 class="card-title">Basic radio</h3>
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
                                <label>Default radios</label>
                                <div class="radio-list">
                                    <label class="radio">
                                        <input type="radio" name="radios1" />
                                        <span></span>Default</label>
                                    <label class="radio radio-disabled">
                                        <input type="radio" disabled="disabled" checked="checked" name="radios1" />
                                        <span></span>Disabled</label>
                                    <label class="radio">
                                        <input type="radio" checked="checked" name="radios1" />
                                        <span></span>Checked</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Inline radios</label>
                                <div class="radio-inline">
                                    <label class="radio">
                                        <input type="radio" name="radios2" />
                                        <span></span>Option 1</label>
                                    <label class="radio">
                                        <input type="radio" name="radios2" />
                                        <span></span>Option 2</label>
                                    <label class="radio">
                                        <input type="radio" name="radios2" />
                                        <span></span>Option 3</label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Inline radios</label>
                                <div class="radio-inline">
                                    <label class="radio">
                                        <input type="radio" checked="checked" name="radios3" />
                                        <span></span>Option 1</label>
                                    <label class="radio">
                                        <input type="radio" name="radios3" />
                                        <span></span>Option 2</label>
                                    <label class="radio">
                                        <input type="radio" checked="checked" name="radios3" />
                                        <span></span>Option 3</label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Large Size</label>
                                <div class="radio-inline">
                                    <label class="radio radio-lg">
                                        <input type="radio" checked="checked" name="radios3_1" />
                                        <span></span>Option 1</label>
                                    <label class="radio radio-lg">
                                        <input type="radio" name="radios3_1" />
                                        <span></span>Option 2</label>
                                    <label class="radio radio-lg">
                                        <input type="radio" name="radios3_1" />
                                        <span></span>Option 3</label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Square Style</label>
                                <div class="radio-inline">
                                    <label class="radio radio-square">
                                        <input type="radio" checked="checked" name="radios13_1" />
                                        <span></span>Option 1</label>
                                    <label class="radio radio-square">
                                        <input type="radio" name="radios13_1" />
                                        <span></span>Option 2</label>
                                    <label class="radio radio-square">
                                        <input type="radio" name="radios13_1" />
                                        <span></span>Option 3</label>
                                </div>
                                <span class="form-text text-muted">Some help text goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Rounded Style</label>
                                <div class="radio-inline">
                                    <label class="radio radio-rounded">
                                        <input type="radio" checked="checked" name="radios15_1" />
                                        <span></span>Option 1</label>
                                    <label class="radio radio-rounded">
                                        <input type="radio" name="radios15_1" />
                                        <span></span>Option 2</label>
                                    <label class="radio radio-rounded">
                                        <input type="radio" name="radios15_1" />
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
                        &lt;label&gt;Default radios&lt;/label&gt;
                        &lt;div class="radio-list"&gt;
                            &lt;label class="radio"&gt;
                                &lt;input type="radio" name="radios1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Default
                            &lt;/label&gt;
                            &lt;label class="radio radio-disabled"&gt;
                                &lt;input type="radio" disabled="disabled" checked="checked" name="radios1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Disabled
                            &lt;/label&gt;
                            &lt;label class="radio"&gt;
                                &lt;input type="radio" checked="checked" name="radios1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Checked
                            &lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Inline radios&lt;/label&gt;
                        &lt;div class="radio-inline"&gt;
                            &lt;label class="radio"&gt;
                                &lt;input type="radio" name="radios2"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 1
                            &lt;/label&gt;
                            &lt;label class="radio"&gt;
                                &lt;input type="radio" name="radios2"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 2
                            &lt;/label&gt;
                            &lt;label class="radio"&gt;
                                &lt;input type="radio" name="radios2"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 3
                            &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Inline radios&lt;/label&gt;
                        &lt;div class="radio-inline"&gt;
                            &lt;label class="radio"&gt;
                                &lt;input type="radio" checked="checked" name="radios3"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 1
                            &lt;/label&gt;
                            &lt;label class="radio"&gt;
                                &lt;input type="radio" name="radios3"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 2
                            &lt;/label&gt;
                            &lt;label class="radio"&gt;
                                &lt;input type="radio" checked="checked" name="radios3"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 3
                            &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Large Size&lt;/label&gt;
                        &lt;div class="radio-inline"&gt;
                            &lt;label class="radio radio-lg"&gt;
                                &lt;input type="radio" checked="checked" name="radios3_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 1
                            &lt;/label&gt;
                            &lt;label class="radio radio-lg"&gt;
                                &lt;input type="radio" name="radios3_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 2
                            &lt;/label&gt;
                            &lt;label class="radio radio-lg"&gt;
                                &lt;input type="radio" name="radios3_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 3
                            &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Square Style&lt;/label&gt;
                        &lt;div class="radio-inline"&gt;
                            &lt;label class="radio radio-square"&gt;
                                &lt;input type="radio" checked="checked" name="radios13_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 1
                            &lt;/label&gt;
                            &lt;label class="radio radio-square"&gt;
                                &lt;input type="radio" name="radios13_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 2
                            &lt;/label&gt;
                            &lt;label class="radio radio-square"&gt;
                                &lt;input type="radio" name="radios13_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 3
                            &lt;/label&gt;
                        &lt;/div&gt;
                        &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Rounded Style&lt;/label&gt;
                        &lt;div class="radio-inline"&gt;
                            &lt;label class="radio radio-rounded"&gt;
                                &lt;input type="radio" checked="checked" name="radios15_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 1
                            &lt;/label&gt;
                            &lt;label class="radio radio-rounded"&gt;
                                &lt;input type="radio" name="radios15_1"/&gt;
                                &lt;span&gt;&lt;/span&gt;
                                Option 2
                            &lt;/label&gt;
                            &lt;label class="radio radio-rounded"&gt;
                                &lt;input type="radio" name="radios15_1"/&gt;
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
                                <label class="col-3 col-form-label">Radios</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-list">
                                        <label class="radio">
                                            <input type="radio" name="radios4" />
                                            <span></span>Default</label>
                                        <label class="radio">
                                            <input type="radio" checked="checked" name="radios4" />
                                            <span></span>Checked</label>
                                        <label class="radio radio-disabled">
                                            <input type="radio" disabled="disabled" name="radios4" />
                                            <span></span>Disabled</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Inline radios</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" name="radios5" />
                                            <span></span>Option 1</label>
                                        <label class="radio">
                                            <input type="radio" name="radios5" />
                                            <span></span>Option 2</label>
                                        <label class="radio">
                                            <input type="radio" name="radios5" />
                                            <span></span>Option 3</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Inline radios</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" name="radios6" />
                                            <span></span>Option 1</label>
                                        <label class="radio">
                                            <input type="radio" checked="checked" name="radios6" />
                                            <span></span>Option 2</label>
                                        <label class="radio">
                                            <input type="radio" name="radios6" />
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
                            &lt;label class="col-3 col-form-label"&gt;Radios&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="radio-list"&gt;
                                    &lt;label class="radio"&gt;
                                        &lt;input type="radio"  name="radios4"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="radio"&gt;
                                        &lt;input type="radio" checked="checked" name="radios4"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-disabled"&gt;
                                        &lt;input type="radio" disabled="disabled" name="radios4"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Disabled
                                    &lt;/label&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Inline radios&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="radio-inline"&gt;
                                    &lt;label class="radio"&gt;
                                        &lt;input type="radio" name="radios5"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 1
                                    &lt;/label&gt;
                                    &lt;label class="radio"&gt;
                                        &lt;input type="radio" name="radios5"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 2
                                    &lt;/label&gt;
                                    &lt;label class="radio"&gt;
                                        &lt;input type="radio" name="radios5"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 3
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Inline radios&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="radio-inline"&gt;
                                    &lt;label class="radio"&gt;
                                        &lt;input type="radio" name="radios6"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 1
                                    &lt;/label&gt;
                                    &lt;label class="radio"&gt;
                                        &lt;input type="radio" checked="checked" name="radios6"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Option 2
                                    &lt;/label&gt;
                                    &lt;label class="radio"&gt;
                                        &lt;input type="radio" name="radios6"/&gt;
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
                                    <div class="radio-inline">
                                        <label class="radio radio-success">
                                            <input type="radio" name="radios5" />
                                            <span></span>Default</label>
                                        <label class="radio radio-success">
                                            <input type="radio" name="radios5" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="radio radio-success radio-disabled">
                                            <input type="radio" name="radios5" disabled="disabled" />
                                            <span></span>Disabled</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Primary State</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-primary">
                                            <input type="radio" name="radios11" />
                                            <span></span>Default</label>
                                        <label class="radio radio-primary">
                                            <input type="radio" name="radios11" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="radio radio-primary radio-disabled">
                                            <input type="radio" name="radios11" disabled="disabled" />
                                            <span></span>Disabled</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Danger State</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="radios12" />
                                            <span></span>Default</label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="radios12" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="radio radio-danger radio-disabled">
                                            <input type="radio" name="radios12" disabled="disabled" />
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
                                &lt;div class="radio-inline"&gt;
                                    &lt;label class="radio radio-success"&gt;
                                        &lt;input type="radio" name="radios5"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-success"&gt;
                                        &lt;input type="radio" name="radios5" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-success radio-disabled"&gt;
                                        &lt;input type="radio" name="radios5" disabled="disabled"/&gt;
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
                                &lt;div class="radio-inline"&gt;
                                    &lt;label class="radio radio-primary"&gt;
                                        &lt;input type="radio" name="radios11"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-primary"&gt;
                                        &lt;input type="radio" name="radios11" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-primary radio-disabled"&gt;
                                        &lt;input type="radio" name="radios11" disabled="disabled"/&gt;
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
                                &lt;div class="radio-inline"&gt;
                                    &lt;label class="radio radio-danger"&gt;
                                        &lt;input type="radio" name="radios12"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-danger"&gt;
                                        &lt;input type="radio" name="radios12" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-danger radio-disabled"&gt;
                                        &lt;input type="radio" name="radios12" disabled="disabled"/&gt;
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
                                    <div class="radio-inline">
                                        <label class="radio radio-outline radio-success">
                                            <input type="radio" name="radios15" />
                                            <span></span>Default</label>
                                        <label class="radio radio-outline radio-success">
                                            <input type="radio" name="radios15" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="radio radio-outline radio-success radio-disabled">
                                            <input type="radio" name="radios15" disabled="disabled" />
                                            <span></span>Disabled</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Outline 2x</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-outline radio-outline-2x radio-primary">
                                            <input type="radio" name="radios16" />
                                            <span></span>Default</label>
                                        <label class="radio radio-outline radio-outline-2x radio-primary">
                                            <input type="radio" name="radios16" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="radio radio-outline radio-outline-2x radio-primary radio-disabled">
                                            <input type="radio" name="radios16" disabled="disabled" />
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
                                &lt;div class="radio-inline"&gt;
                                    &lt;label class="radio radio-outline radio-success"&gt;
                                        &lt;input type="radio" name="radios15"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-outline radio-success"&gt;
                                        &lt;input type="radio" name="radios15" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-outline radio-success radio-disabled"&gt;
                                        &lt;input type="radio" name="radios15" disabled="disabled"/&gt;
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
                                &lt;div class="radio-inline"&gt;
                                    &lt;label class="radio radio-outline radio-outline-2x radio-primary"&gt;
                                        &lt;input type="radio" name="radios16"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-outline radio-outline-2x radio-primary"&gt;
                                        &lt;input type="radio" name="radios16" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-outline radio-outline-2x radio-primary radio-disabled"&gt;
                                        &lt;input type="radio" name="radios16" disabled="disabled"/&gt;
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
                        <h3 class="card-title">Accent Tipe</h3>
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
                                <label class="col-3 col-form-label">Success</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-accent radio-success">
                                            <input type="radio" name="radios18" />
                                            <span></span>Default</label>
                                        <label class="radio radio-accent radio-success">
                                            <input type="radio" name="radios18" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="radio radio-accent radio-success radio-disabled">
                                            <input type="radio" name="radios18" disabled="disabled" />
                                            <span></span>Disabled</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Danger</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-accent radio-danger">
                                            <input type="radio" name="radios19" />
                                            <span></span>Default</label>
                                        <label class="radio radio-accent radio-danger">
                                            <input type="radio" name="radios19" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="radio radio-accent radio-danger radio-disabled">
                                            <input type="radio" name="radios19" disabled="disabled" />
                                            <span></span>Disabled</label>
                                    </div>
                                    <span class="form-text text-muted">Some help text goes here</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Primary</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-accent radio-primary">
                                            <input type="radio" name="radios20" />
                                            <span></span>Default</label>
                                        <label class="radio radio-accent radio-primary">
                                            <input type="radio" name="radios20" checked="checked" />
                                            <span></span>Checked</label>
                                        <label class="radio radio-accent radio-primary radio-disabled">
                                            <input type="radio" name="radios20" disabled="disabled" />
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
                            &lt;label class="col-3 col-form-label"&gt;Success&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="radio-inline"&gt;
                                    &lt;label class="radio radio-accent radio-success"&gt;
                                        &lt;input type="radio" name="radios18"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-accent radio-success"&gt;
                                        &lt;input type="radio" name="radios18" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-accent radio-success radio-disabled"&gt;
                                        &lt;input type="radio" name="radios18" disabled="disabled"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Disabled
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Danger&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="radio-inline"&gt;
                                    &lt;label class="radio radio-accent radio-danger"&gt;
                                        &lt;input type="radio" name="radios19"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-accent radio-danger"&gt;
                                        &lt;input type="radio" name="radios19" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-accent radio-danger radio-disabled"&gt;
                                        &lt;input type="radio" name="radios19" disabled="disabled"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Disabled
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;span class="form-text text-muted"&gt;Some help text goes here&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label class="col-3 col-form-label"&gt;Primary&lt;/label&gt;
                            &lt;div class="col-9 col-form-label"&gt;
                                &lt;div class="radio-inline"&gt;
                                    &lt;label class="radio radio-accent radio-primary"&gt;
                                        &lt;input type="radio" name="radios20"/&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Default
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-accent radio-primary"&gt;
                                        &lt;input type="radio" name="radios20" checked="checked" /&gt;
                                        &lt;span&gt;&lt;/span&gt;
                                        Checked
                                    &lt;/label&gt;
                                    &lt;label class="radio radio-accent radio-primary radio-disabled"&gt;
                                        &lt;input type="radio" name="radios20" disabled="disabled"/&gt;
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
