<!-- CF7 to any API Documentatiom -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<div class="cf7anyapi_doc">
    <h3><?php esc_html_e( 'CF7 To Any API Documentation', 'contact-form-to-any-api' ); ?></h3>    
    <div class="row">
    <div class="col-2 tab">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php esc_html_e( 'How to configure', 'contact-form-to-any-api' ); ?></a>
        <a class="nav-link" id="v-pills-video-tab" data-toggle="pill" href="#v-pills-video" role="tab" aria-controls="v-pills-video" aria-selected="false"><?php esc_html_e( 'Video for configuration', 'contact-form-to-any-api' ); ?></a>
        <a class="nav-link" id="v-pills-logs-tab" data-toggle="pill" href="#v-pills-logs" role="tab" aria-controls="v-pills-logs" aria-selected="false"><?php esc_html_e( 'Logs', 'contact-form-to-any-api' ); ?></a>
        <a class="nav-link" id="v-pills-entries-tab" data-toggle="pill" href="#v-pills-entries" role="tab" aria-controls="v-pills-entries" aria-selected="false"><?php esc_html_e( 'Entries', 'contact-form-to-any-api' ); ?></a>
        <a class="nav-link" id="v-pills-json-format-tab" data-toggle="pill" href="#v-pills-json-format" role="tab" aria-controls="v-pills-json-format" aria-selected="false"><?php esc_html_e( 'Supported JSON Format', 'contact-form-to-any-api' ); ?></a>
        <a class="nav-link" id="v-pills-cf7-hidden-field-tab" data-toggle="pill" href="#v-pills-cf7-hidden-field" role="tab" aria-controls="v-pills-cf7-hidden-field" aria-selected="false"><?php esc_html_e( 'CF7 Hidden Fields', 'contact-form-to-any-api' ); ?></a>
        <a class="nav-link" id="v-pills-pro-tab" data-toggle="pill" href="#v-pills-pro" role="tab" aria-controls="v-pills-pro" aria-selected="false"><?php esc_html_e( 'Contact form to any API PRO', 'contact-form-to-any-api' ); ?></a>
        <a class="nav-link" id="v-pills-contact-us-tab" data-toggle="pill" href="#v-pills-contact-us" role="tab" aria-controls="v-pills-contact-us" aria-selected="false"><?php esc_html_e( 'Contact Us', 'contact-form-to-any-api' ); ?></a>
        </div>
    </div>
    <div class="col-7 tab">
        <div class="tab-content" id="v-pills-tabContent">
        <!-- cf7 API -->
        <div class="tab-pane fade show active cf7anyapi_full_width" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h5><?php esc_html_e( 'CF7 to any API', 'contact-form-to-any-api' ); ?></h5>
            <ol>
                <li><?php esc_html_e( 'Click add new CF7 API and give the suitable API title', 'contact-form-to-any-api' ); ?></li>
                <li><?php esc_html_e( 'Please select a form which you would like to connect with API', 'contact-form-to-any-api' ); ?></li>
                <li><?php esc_html_e( 'Enter your CRM/API URL in API URL field', 'contact-form-to-any-api' ); ?></li>
                    <p>Ex. https://api.mailbluster.com/api/leads/</p>
                <li><?php esc_html_e( 'Add header request like below', 'contact-form-to-any-api' ); ?></li>
                
            <code>
        <pre>
    Authorization: MY_API_KEY
    Authorization: Bearer xxxxxxx
    Authorization: Basic xxxxxx
    Content-Type: application/json
        </pre>
            </code>
            <p><b>Authorization having Username & Password with Base64 ?</br>
               to convert online <a href="https://www.base64encode.net/" target="_blank">click here</a> and put it on header </b></p>
            <b>Example</b><code>
                <pre>
    Authorization: Basic ' . base64_encode( YOUR_USERNAME . ':' . YOUR_PASSWORD )
    Content-Type: application/json 
                </pre>
            </code>
            <b>After convert put it on header like below</b>
            <code>
                <pre>
    Authorization: Basic c2FsdXRlLXZldGVyYW5zLWFwaSA6IDBjd1NURENTcE91MUNOQXFVRFFmajdN
    Content-Type: application/json
                </pre>
            </code> 
            <li><?php esc_html_e( 'Then you have to select your Input Type JSON OR GET/POST', 'contact-form-to-any-api' ); ?></li>
                <li><?php esc_html_e( 'Select your API Method POST or GET', 'contact-form-to-any-api' ); ?></li>
                <li><?php esc_html_e( 'Map your Fields with your API KEYS', 'contact-form-to-any-api' ); ?> </li>
                <li><?php esc_html_e( 'Save your API configuration', 'contact-form-to-any-api' ); ?> </li>
            </ol>
        </div>
        <!-- Logs -->
        <div class="tab-pane fade cf7anyapi_full_width" id="v-pills-logs" role="tabpanel" aria-labelledby="v-pills-logs-tab">
        <h5>Logs</h5>
            <ol>
                <li>After submitting data you can see your data in <b>Logs</b> tab.</li>
                <li>You can see your API logs and its data which is submitted by user </li>
                <li>You can see your <b>API response too</b>.</li>
                Ex. <img src="<?php echo plugins_url().'/contact-form-to-any-api/admin/images/logs.png';?>" alt="" style="height:100%; width:100%;">
            </ol>
        </div>

        <!-- entries -->
        <div class="tab-pane fade" id="v-pills-entries" role="tabpanel" aria-labelledby="v-pills-entries-tab">
        <h5>Entries</h5>
            <ol>
                <li>Select the form and its data will display.</li>               
                <li>You can download your data in <b>CSV</b>, <b>Excel</b>, <b>PDF</b> and also you can <b>Print</b> your data.</li>
                Ex. <img src="<?php echo plugins_url().'/contact-form-to-any-api/admin/images/entries.png';?>" alt="" style="height:100%; width:100%;">
            </ol>
            
        </div>

        <!-- Supported JSON Format -->
        <div class="tab-pane fade cf7anyapi_full_width" id="v-pills-json-format" role="tabpanel" aria-labelledby="v-pills-json-format-tab">
        <h5>Supported JSON format</h5>
            <ol>
                <li><b>Supported JSON format by CF7 to any API</b></br>
                <code>
            <pre>
    {
        Firstname : "your-first-name",
        Lastname : "your-last-name",
        Email : "your-email",
        Phone : "your-phone"
    }
            </pre>
                </code>
                    </li>

                    <li><b>Unsupported JSON Format:</b> Required <a href="https://www.contactformtoapi.com/pricing/#pricing" class="cf7_to_any_api_doc_link"><strong>Pro Version</strong></a></br>
                    <code>
            <pre>
    {
        Firstname : "your-first-name",
        Lastname : "your-last-name",
        Email : "your-email",
        Phone : { 
                   office-number :  "9898989898", 
                   helpline-number :  "1800-125-125"
                }
    }
            </pre>
                </code>

                <h5><b>Your API has Unsupported format of json ?? Dont worry our development team can customize our plugin as per your need</b> <a target="_blank" href="https://www.contactformtoapi.com/#contact_us">Click here to contact us </a></h5>
                </li>
            </ol>
        </div>
        <!-- CF7 Hidden field -->
         <div class="tab-pane fade cf7anyapi_full_width" id="v-pills-cf7-hidden-field" role="tabpanel" aria-labelledby="v-pills-cf7-hidden-field">
            <h5><?php esc_html_e( 'How to use CF7 Hidden fields', 'contact-form-to-any-api' ); ?></h5><br>
            <p class="pro_tab_description">Hidden field without value :  <strong> [hidden tracking-id] </strong></p>
            <p class="pro_tab_description">Hidden field with Default value : <strong>[hidden tracking-id default "12345"] </strong></p>
            <p class="pro_tab_description">Hidden field with fix/static value : <strong> [hidden tracking-id "12345"] </strong> </p>
            <p class="pro_tab_description">Hidden field is important part whenver we want to send data to API. Many API has parameter that need to send with static value in that case we can create hidden field and put static value and simply Map Hidden field with API mapping Key</p>
         </div>
        <!-- video tutorial -->
        <div class="tab-pane fade cf7anyapi_full_width tab" id="v-pills-video" role="tabpanel" aria-labelledby="v-pills-video-tab">
            <h5>CF7 to any API video tutorial</h5>
            <iframe width="550" height="330" src="https://www.youtube.com/embed/1K-JdXwDH_k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

          <!-- Pro Version -->
          <div class="tab-pane fade cf7anyapi_full_width" id="v-pills-pro" role="tabpanel" aria-labelledby="v-pills-pro-tab">
          <p class="pro_tab_description">Still not convinced? Here is the list of features that shows how Contact Form to Any API is the best plugin to connect any contact form with your CRM or any other third party services.</p>
             <h5 class="pro_tab_title">Pro Version Features:</h5>
             <ul class="pro_feature_list">
                 <li>Support Multi Level or Any Format of JSON</li>
                 <li>Send data to multiple API</li>
                 <li>File input supported – Uploaded file will convert into BASE64 and send to API</li>
                 <li>Option to Choose when to send data to API – Before cf7 mail sent OR After mail sent</li>
                 <li>Priority Support</li>
                 <li>Paid plugin customization support</li>
             </ul>
          
             <h5 class="pro_tab_title">Supported CRM/API:</h5>
             <ul class="pro_crm_list">
                 <li>Sage CRM</li>
                 <li>Mail chimp</li>
                 <li>Zapier</li>
                 <li>Odoo CRM/ERP system</li>
                 <li>Mailbluster</li>
                 <li>Lead Post Api</li>
                 <li>Pilotsolution</li>
                 <li>Virtuagym API</li>
                 <li>Clio Grow</li>
                 <li>OS Ticket</li>
                 <li>And many more</li>
             </ul>

             <p class="get_pro_version"><a href="https://www.contactformtoapi.com/pricing/#pricing" target="_blank">Get Pro Version</a></p>
          </div>
        
         <!-- contact us -->
         <div class="tab-pane fade cf7anyapi_full_width" id="v-pills-contact-us" role="tabpanel" aria-labelledby="v-pills-contact-us-tab">
        <h5>Contact Us</h5> <br>
           <h5>Email : <a href="mailto:support@contactformtoapi.com">support@contactformtoapi.com</a></h5>
           <p>Need Help with Plugin Integration ? <a target="_blank" href="https://www.contactformtoapi.com/#contact_us"> Click to Connect us</a></p>
        </div>
        </div>
    </div>
    <div class="col-3 image">
        <div class="tab-content" id="v-pills-tabContent">
        <a href="https://www.contactformtoapi.com/#contact_us" target="_blank">
            <img src="<?php echo CF7_CURL_DOMAIN.'/cf7-imges/right_image_1.jpg';?>" alt="" style="width:100%;">
        </a>
        <a href="https://wordpress.org/support/plugin/contact-form-to-any-api/reviews/" target="_blank">
        <img height="400" width="100%" src="<?php echo CF7_CURL_DOMAIN.'/cf7-imges/right_image_2.png';?>" alt="rating.png">
        </a>
        </div>
    </div>
    <!-- contact-us image -->
    <div class="contact_us contact_image">
        <a href="https://www.contactformtoapi.com/#contact_us" target="_blank">
            <img src="<?php echo CF7_CURL_DOMAIN.'/cf7-imges/bottom_image.jpg';?>" alt="" style="width:100%;">
        </a>
    </div>
    
    </div>
</div>