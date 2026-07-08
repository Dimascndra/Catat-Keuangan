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
                Widgets
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <!--begin::Notice-->
        <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
            <div class="alert-icon">
                <span class="svg-icon svg-icon-primary svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                fill="#000000" opacity="0.3" />
                            <path
                                d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </div>
            <div class="alert-text">typeahead.js a flexible JavaScript library that provides a strong foundation for
                building robust typeaheads. typeahead.js is a fast and fully-featured autocomplete library.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="http://twitter.github.io/typeahead.js/" target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/twitter/typeahead.js" target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Typeahead Examples</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form class="form">
                <div class="card-body">
                    <!--begin: Code-->
                    <div class="example-code mb-10">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                            </li>
                        </ul>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
      &lt;div class="card card-custom"&gt;
       &lt;div class="card-header"&gt;
        &lt;h3 class="card-title"&gt;
         Typeahead Examples
        &lt;/h3&gt;
       &lt;/div&gt;
       &lt;!--begin::Form--&gt;
       &lt;form class="form"&gt;
        &lt;div class="card-body"&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Basic Demo&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="typeahead"&gt;
            &lt;input class="form-control" id="kt_typeahead_1" type="text" dir="&lt;?php echo isset( $_REQUEST['rtl'] ) &amp;&amp; $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?&gt;" placeholder="States of USA"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Bloodhound (Suggestion Engine)&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="typeahead"&gt;
            &lt;input class="form-control" id="kt_typeahead_2" type="text" dir="&lt;?php echo isset( $_REQUEST['rtl'] ) &amp;&amp; $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?&gt;" placeholder="States of USA"/&gt;
           &lt;/div&gt;
           &lt;div class="form-text text-muted"&gt;
            Bloodhound offers advanced functionalities such as prefetching and backfilling with remote data.
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Prefetch&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="typeahead"&gt;
            &lt;input class="form-control" id="kt_typeahead_3" type="text" dir="&lt;?php echo isset( $_REQUEST['rtl'] ) &amp;&amp; $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?&gt;" placeholder="Countries"/&gt;
           &lt;/div&gt;
           &lt;div class="form-text text-muted"&gt;Prefetched data is fetched and processed on initialization&lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Custom Templates&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="typeahead"&gt;
            &lt;input class="form-control" id="kt_typeahead_4" type="text" dir="&lt;?php echo isset( $_REQUEST['rtl'] ) &amp;&amp; $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?&gt;" placeholder="Oscar winners"/&gt;
           &lt;/div&gt;
           &lt;div class="form-text text-muted"&gt;Custom templates give you full control over how suggestions get rendered&lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Multiple Datasets&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="typeahead"&gt;
            &lt;input class="form-control" id="kt_typeahead_5" type="text" dir="&lt;?php echo isset( $_REQUEST['rtl'] ) &amp;&amp; $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?&gt;" placeholder="Select an option"/&gt;
           &lt;/div&gt;
           &lt;div class="form-text text-muted"&gt;Remote data is only used when the data provided by local and prefetch is insufficient&lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Modal Demos&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;a href="" class="btn btn-light-primary font-weight-bold btn-sm" data-toggle="modal" data-target="#kt_typeahead_modal"&gt;Launch modal typeaheads&lt;/a&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="card-footer"&gt;
         &lt;div class="row"&gt;
          &lt;div class="col-lg-9 ml-lg-auto"&gt;
           &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
           &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/form&gt;
       &lt;!--end::Form--&gt;
      &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_js">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
      // Class definition
      var KTTypeahead = function() {
          var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
              'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
              'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
              'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
              'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
              'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
              'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
              'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
              'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
          ];

          // Private functions
          var demo1 = function() {
              var substringMatcher = function(strs) {
                  return function findMatches(q, cb) {
                      var matches, substringRegex;

                      // an array that will be populated with substring matches
                      matches = [];

                      // regex used to determine if a string contains the substring `q`
                      substrRegex = new RegExp(q, 'i');

                      // iterate through the pool of strings and for any string that
                      // contains the substring `q`, add it to the `matches` array
                      $.each(strs, function(i, str) {
                          if (substrRegex.test(str)) {
                              matches.push(str);
                          }
                      });

                      cb(matches);
                  };
              };

              $('#kt_typeahead_1, #kt_typeahead_1_modal').typeahead({
                  hint: true,
                  highlight: true,
                  minLength: 1
              }, {
                  name: 'states',
                  source: substringMatcher(states)
              });
          }

          var demo2 = function() {
              // constructs the suggestion engine
              var bloodhound = new Bloodhound({
                  datumTokenizer: Bloodhound.tokenizers.whitespace,
                  queryTokenizer: Bloodhound.tokenizers.whitespace,
                  // `states` is an array of state names defined in "The Basics"
                  local: states
              });

              $('#kt_typeahead_2, #kt_typeahead_2_modal').typeahead({
                  hint: true,
                  highlight: true,
                  minLength: 1
              }, {
                  name: 'states',
                  source: bloodhound
              });
          }

          var demo3 = function() {
              var countries = new Bloodhound({
                  datumTokenizer: Bloodhound.tokenizers.whitespace,
                  queryTokenizer: Bloodhound.tokenizers.whitespace,
                  // url points to a json file that contains an array of country names, see
                  // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
                  prefetch: HOST_URL + '/api/?file=typeahead/countries.json'
              });

              // passing in `null` for the `options` arguments will result in the default
              // options being used
              $('#kt_typeahead_3, #kt_typeahead_3_modal').typeahead(null, {
                  name: 'countries',
                  source: countries
              });
          }

          var demo4 = function() {
              var bestPictures = new Bloodhound({
                  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                  queryTokenizer: Bloodhound.tokenizers.whitespace,
                  prefetch: HOST_URL + '/api/?file=typeahead/movies.json'
              });

              $('#kt_typeahead_4').typeahead(null, {
                  name: 'best-pictures',
                  display: 'value',
                  source: bestPictures,
                  templates: {
                      empty: [
                          '&lt;div class="empty-message" style="padding: 10px 15px; text-align: center;"&gt;',
                          'unable to find any Best Picture winners that match the current query',
                          '&lt;/div&gt;'
                      ].join(''),
                        suggestion: Handlebars.compile('&lt;div&gt;&lt;strong&gt;@{{ value }}&lt;/strong&gt; - @{{ year }}&lt;/div&gt;')
                  }
              });
          }

          var demo5 = function() {
              var nbaTeams = new Bloodhound({
                  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
                  queryTokenizer: Bloodhound.tokenizers.whitespace,
                  prefetch: HOST_URL + '/api/?file=typeahead/nba.json'
              });

              var nhlTeams = new Bloodhound({
                  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
                  queryTokenizer: Bloodhound.tokenizers.whitespace,
                  prefetch: HOST_URL + '/api/?file=typeahead/nhl.json'
              });

              $('#kt_typeahead_5').typeahead({
                  highlight: true
              }, {
                  name: 'nba-teams',
                  display: 'team',
                  source: nbaTeams,
                  templates: {
                      header: '&lt;h3 class="league-name" style="padding: 5px 15px; font-size: 1.2rem; margin:0;"&gt;NBA Teams&lt;/h3&gt;'
                  }
              }, {
                  name: 'nhl-teams',
                  display: 'team',
                  source: nhlTeams,
                  templates: {
                      header: '&lt;h3 class="league-name" style="padding: 5px 15px; font-size: 1.2rem; margin:0;"&gt;NHL Teams&lt;/h3&gt;'
                  }
              });
          }

          return {
              // public functions
              init: function() {
                  demo1();
                  demo2();
                  demo3();
                  demo4();
                  demo5();
              }
          };
      }();

      jQuery(document).ready(function() {
          KTTypeahead.init();
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Basic Demo</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="typeahead">
                                <input class="form-control" id="kt_typeahead_1" type="text" dir="ltr"
                                    placeholder="States of USA" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Bloodhound (Suggestion Engine)</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="typeahead">
                                <input class="form-control" id="kt_typeahead_2" type="text" dir="ltr"
                                    placeholder="States of USA" />
                            </div>
                            <div class="form-text text-muted">Bloodhound offers advanced functionalities such as
                                prefetching and backfilling with remote data.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Prefetch</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="typeahead">
                                <input class="form-control" id="kt_typeahead_3" type="text" dir="ltr"
                                    placeholder="Countries" />
                            </div>
                            <div class="form-text text-muted">Prefetched data is fetched and processed on initialization
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Custom Templates</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="typeahead">
                                <input class="form-control" id="kt_typeahead_4" type="text" dir="ltr"
                                    placeholder="Oscar winners" />
                            </div>
                            <div class="form-text text-muted">Custom templates give you full control over how suggestions
                                get rendered</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Multiple Datasets</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="typeahead">
                                <input class="form-control" id="kt_typeahead_5" type="text" dir="ltr"
                                    placeholder="Select an option" />
                            </div>
                            <div class="form-text text-muted">Remote data is only used when the data provided by local and
                                prefetch is insufficient</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="" class="btn btn-light-primary font-weight-bold btn-sm" data-toggle="modal"
                                data-target="#kt_typeahead_modal">Launch modal typeaheads</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
        <!--begin::Modal-->
        <div class="modal fade" id="kt_typeahead_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Typeahead Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="form">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Basic Demo</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="typeahead">
                                        <input class="form-control" id="kt_typeahead_1_modal" dir="ltr"
                                            type="text" placeholder="States of USA" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Bloodhound</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="typeahead">
                                        <input class="form-control" id="kt_typeahead_2_modal" dir="ltr"
                                            type="text" placeholder="States of USA" />
                                    </div>
                                    <div class="form-text text-muted">Bloodhound offers advanced functionalities such as
                                        prefetching and backfilling with remote data.</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Prefetch</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="typeahead">
                                        <input class="form-control" id="kt_typeahead_3_modal" dir="ltr"
                                            type="text" placeholder="Countries" />
                                    </div>
                                    <div class="form-text text-muted">Prefetched data is fetched and processed on
                                        initialization</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Modal-->
        <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Validation State Examples</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form class="form">
                <div class="card-body">
                    <!--begin: Code-->
                    <div class="example-code mb-10">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_html2">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_js2">JS</a>
                            </li>
                        </ul>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_html2" role="tabpanel">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Validation State Examples
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Success State&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12 is-valid"&gt;
            &lt;div class="typeahead"&gt;
             &lt;input class="form-control is-valid" id="kt_typeahead_1_validate" dir="&lt;?php echo isset( $_REQUEST['rtl'] ) &amp;&amp; $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?&gt;" type="text" placeholder="States of USA"/&gt;
            &lt;/div&gt;
            &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Error State&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12 is-invalid"&gt;
            &lt;div class="typeahead"&gt;
             &lt;input class="form-control is-invalid" id="kt_typeahead_2_validate" dir="&lt;?php echo isset( $_REQUEST['rtl'] ) &amp;&amp; $_REQUEST['rtl'] ? 'rtl' : 'ltr' ?&gt;" type="text" placeholder="States of USA"/&gt;
            &lt;/div&gt;
            &lt;div class="invalid-feedback"&gt;Shucks, check the formatting of that and try again.&lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-9 ml-lg-auto"&gt;
            &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_js2">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
      // Class definition
      var KTTypeahead = function() {

          var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
              'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
              'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
              'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
              'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
              'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
              'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
              'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
              'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
          ];

          // Private functions
          var demo1 = function() {
              var substringMatcher = function(strs) {
                  return function findMatches(q, cb) {
                      var matches, substringRegex;

                      // an array that will be populated with substring matches
                      matches = [];

                      // regex used to determine if a string contains the substring `q`
                      substrRegex = new RegExp(q, 'i');

                      // iterate through the pool of strings and for any string that
                      // contains the substring `q`, add it to the `matches` array
                      $.each(strs, function(i, str) {
                          if (substrRegex.test(str)) {
                              matches.push(str);
                          }
                      });

                      cb(matches);
                  };
              };

              $('#kt_typeahead_1_validate, #kt_typeahead_2_validate').typeahead({
                  hint: true,
                  highlight: true,
                  minLength: 1
              }, {
                  name: 'states',
                  source: substringMatcher(states)
              });
          }

          return {
              // public functions
              init: function() {
                  demo1();
              }
          };
      }();

      jQuery(document).ready(function() {
          KTTypeahead.init();
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Success State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12 is-valid">
                            <div class="typeahead">
                                <input class="form-control is-valid" id="kt_typeahead_1_validate" dir="ltr"
                                    type="text" placeholder="States of USA" />
                            </div>
                            <div class="valid-feedback">Success! You've done it.</div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Error State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12 is-invalid">
                            <div class="typeahead">
                                <input class="form-control is-invalid" id="kt_typeahead_2_validate" dir="ltr"
                                    type="text" placeholder="States of USA" />
                            </div>
                            <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/typeahead.js') }}"></script>
@endsection
