<article class="docs-article" id="introduction">
    <header class="docs-header">
    <h1 class="docs-heading">Introduction <span class="docs-time">Last updated: 2023-03-07</h1>
    <section class="docs-intro">
            <p>
                Patan API is an api made for Patan Campus website and mobile app.
            </p>
    </section><!--//docs-intro-->
    
</header>
<section class="docs-section" id="callapijs">
    <h2 class="section-heading">API with using Vanilla JS:</h2>
    <div class="row">
        <div class="col-md-6">
        <h5 >GET:</h5>
    <div class="docs-code-block  mb-3"> 
<pre>
<code>
const data = { username: 'example' };

var requestOptions = {
    method: 'GET',
    body: JSON.stringify(data),
};

fetch("https://your-request-api-link", requestOptions)
.then(response => response.text())
.then(result => {
    console.log(result)
    //your code here
})
.catch(error => console.log('error', error)); 
</code>
</pre>
                        </div>

                            </div>
                            <div class="col-md-6">
                                
                        <h5 >POST:</h5>
                        <div class="docs-code-block  mb-3"> 
<pre>
<code>
const data = { username: 'example' };

var requestOptions = {
    method: 'POST',
    body: JSON.stringify(data),
};

fetch("https://your-request-api-link", requestOptions)
.then(response => response.text())
.then(result => {
    console.log(result)
    //your code here
})
.catch(error => console.log('error', error)); 
</code>
</pre>
                        </div>
                            </div>
                        </div>
						

					</section>
                    <section class="docs-section" id="callapisquery">
						<h2 class="section-heading">API fetch Code Example using jQuery:</h2>
                        <div class="row">
                            <div class="col-md-6">
                            <h5 >GET:</h5>
                        <div class="docs-code-block  mb-3"> 
<pre>
<code>
$.ajax(
    "url": "https://your-request-api-link",
    "method": "GET",
    "data" : { username : 'example' }
    ).done(function (response) {
    console.log(response);
    //your code here
});
</code>
</pre>
                               
                        </div>
                            </div>
                            <div class="col-md-6">
                                
                        <h5 >POST:</h5>
                        <div class="docs-code-block  mb-3"> 
<pre>
<code>
$.ajax(
    "url": "https://your-request-api-link",
    "method": "POST",
    "data" : { username : 'example' }
    ).done(function (response) {
    console.log(response);
    //your code here
});
</code>
</pre>
                            </div>
                        </div>
						
                        <p>Add this link above your script : <br><pre><code>&#x3C;script src=&#x22;//https://code.jquery.com/jquery-3.6.1.min.js&#x22;&#x3E; &#x3C;/script&#x3E;</code></pre></p>
                               
                        </div>
</section>
                    <section class="docs-section" id="callapiandroidjava">
						<h2 class="section-heading">API fetch Code Example using Java</h2>
                        <div class="row">
                            <div class="docs-code-block  mb-3">
<pre>
    <code>
final TextView textView = (TextView) findViewById(R.id.text);
// ...

// Instantiate the RequestQueue.
RequestQueue queue = Volley.newRequestQueue(this);
String url = "https://www.google.com";

// Request a string response from the provided URL.
StringRequest stringRequest = new StringRequest(Request.Method.GET, url,
            new Response.Listener<String>() {
    @Override
    public void onResponse(String response) {
        // Display the first 500 characters of the response string.
        textView.setText("Response is: " + response.substring(0,500));
    }
}, new Response.ErrorListener() {
    @Override
    public void onErrorResponse(VolleyError error) {
        textView.setText("That didn't work!");
    }
});

// Add the request to the RequestQueue.
queue.add(stringRequest);
</code>
</pre>
<p>Add the following dependency to your app’s build.gradle file: <br><pre><code>
dependencies {
    implementation 'com.android.volley:volley:1.2.1'
}
</code>
</pre>
</p>




                            </div>
                        </div>
					</section>
                    <section class="docs-section" id="response">
						<h2 class="section-heading">Response Example:</h2>
                        <h4>Success response</h4>
                            <div class="docs-code-block" >
<pre class="shadow-lg rounded">
<code class="json hljs">
{
    "data" : 
    [
        {
            "id": "...",
            "title": "...",
            "image": "...",
            "code": "...",
            "description": "...",
            "created_at": "...",
        },
        {
            "id": "...",
            "title": "...",
            "image": "...",
            "code": "...",
            "description": "...",
            "created_at": "...",
        },
        {
            "..."
        }
    ]
}
</code></pre>
            </div>

<h4>Error Response</h4>
            <div class="docs-code-block" >
    
<pre class="shadow-lg rounded">
<code class="json hljs">
{
"data":
    {
        "error":"response_code",
        "message":"Error Message"
    }
}
</code></pre>
            </div>
    </section>

    <section  class="docs-article" id="getdata">
        <h1 class="docs-heading">Get Data <span class="docs-time">Last updated: 2023-03-07</h1>
    </section>
    <section class="docs-section" id="blog">
        <h2 class="section-heading">Blog</h2>
            <div class="docs-code-block" >
                <div class='mb-3'>
                    <h6>Parameters</h6>
                    <code>
                        token, blog, limit , offset , blog_code
                    </code>
                </div>
                <div class='mb-3'>
                    <h6>All Blog</h6>
                    <code>
                        https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&blog
                    </code>
                </div>
                 <div class='mb-3'>
                    <h6>Latest Blog</h6>
                    <code>
                        https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&blog&limit=4&offset=0
                    </code>
                </div>
                <div class='mb-3'>
                    <h6>Single Blog</h6>
                    <code>
                        https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&blog_code=BLOG_CODE
                    </code>
                </div>
        </div>
    </section>
    
    <section class="docs-section" id="course">
        <h2 class="section-heading">Course</h2>
            <div class="docs-code-block" >
                <div class='mb-3'>
                    <h6>Parameters</h6>
                    <code>
                        token, course, limit , offset , course_code
                    </code>
                </div>
                <div class='mb-3'>
                    <h6>All course</h6>
                    <code>
                        https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&course
                    </code>
                </div>
                 <div class='mb-3'>
                    <h6>Latest Course</h6>
                    <code>
                        https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&course&limit=4&offset=0
                    </code>
                </div>
                <div class='mb-3'>
                    <h6>Single Course</h6>
                    <code>
                        https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&course_code=COURSE_CODE
                    </code>
                </div>
        </div>
    </section>
    <section class="docs-section" id="all_faculties">
        <h2 class="section-heading">All Faculties and Department</h2>
        <div class="docs-code-block" >
            <div class='mb-3'>
                <h6>Parameters</h6>
                <code>
                    token, all_faculties
                </code>
            </div>
                <div class='mb-3'>
                <h6>API</h6>
                <code>
                    https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&all_faculties
                </code>
            </div>
        </div>
    </section>

     <section class="docs-section" id="faculties">
        <h2 class="section-heading">Faculties Only</h2>
        <div class="docs-code-block" >
            <div class='mb-3'>
                <h6>Parameters</h6>
                <code>
                    token, faculties
                </code>
            </div>
                <div class='mb-3'>
                <h6>API</h6>
                <code>
                    https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&faculties
                </code>
            </div>
        </div>
    </section>

     <section class="docs-section" id="department">
        <h2 class="section-heading">Department Only</h2>
        <div class="docs-code-block" >
            <div class='mb-3'>
                <h6>Parameters</h6>
                <code>
                    token, department , faculty_id
                </code>
            </div>
                <div class='mb-3'>
                <h6>API</h6>
                <code>
                    https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&department&faculty_id=FACULTY_ID
                </code>
            </div>
        </div>
    </section>
    <section class="docs-section" id="campuscheif">
        <h2 class="section-heading">Campus Cheif</h2>
        <div class="docs-code-block" >
            <div class='mb-3'>
                <h6>Parameters</h6>
                <code>
                    token, campuscheif 
                </code>
            </div>
                <div class='mb-3'>
                <h6>API</h6>
                <code>
                    https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&campuscheif
                </code>
            </div>
        </div>
    </section>
    <section class="docs-section" id="professor">
        <h2 class="section-heading">Professor</h2>
        <div class="docs-code-block" >
            <div class='mb-3'>
                <h6>Parameters</h6>
                <code>
                    token, professor 
                </code>
            </div>
                <div class='mb-3'>
                <h6>API</h6>
                <code>
                    https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&professor
                </code>
            </div>
        </div>
    </section>
      <section class="docs-section" id="notice">
        <h2 class="section-heading">Notice</h2>
        <div class="docs-code-block" >
            <div class='mb-3'>
                <h6>Parameters</h6>
                <code>
                    token, notice 
                </code>
            </div>
                <div class='mb-3'>
                <h6>API</h6>
                <code>
                    https://api.bimash.com.np/patan/api/v1/get?notice&token=YOUR_API_TOKEN
                </code>
            </div>
        </div>
    </section>

    <section class="docs-section" id="inquiry">
        <h2 class="section-heading">Inquiry</h2>
            <div class="docs-code-block" >
                <div class='mb-3'>
                    <h6>Parameters</h6>
                    <code>
                        token, device_id
                    </code>
                </div>
                 <div class='mb-3'>
                    <h6>Inquiry</h6>
                    <code>
                        https://api.bimash.com.np/patan/api/v1/get?token=YOUR_API_TOKEN&device_id=DEVICE_ID
                    </code>
                </div>
        </div>
    </section>

    
    <section  class="docs-article" id="postdata">
        <h1 class="docs-heading">POST Data <span class="docs-time">Last updated: 2023-03-07</h1>
    </section>
     <section class="docs-section" id="contactus">
        <h2 class="section-heading">Contact US</h2>
            <div class="docs-code-block" >
                <div class='mb-3'>
                    <h6>Parameters</h6>
                    <code>
                        token , contact_us , name , contact , address , email , message
                    </code>
                </div>
                 <div class='mb-3'>
                    <h6>Api</h6>
                    <code>
                        https://api.bimash.com.np/patan/api/v1/post
                    </code>
                </div>
        </div>
    </section>

     <section class="docs-section" id="post_inquiry">
        <h2 class="section-heading">Inquiry</h2>
            <div class="docs-code-block" >
                <div class='mb-3'>
                    <h6>Parameters</h6>
                    <code>
                       token , inquiry , contact_no ,  message  , code  , email 
                    </code>
                </div>
                <div class='mb-3'>
                    <h6>Api</h6>
                    <code>
                        https://api.bimash.com.np/patan/api/v1/post
                    </code>
                </div>
        </div>
    </section>
     <section class="docs-section" id="post_newsletter">
        <h2 class="section-heading">News Letter</h2>
            <div class="docs-code-block" >
                <div class='mb-3'>
                    <h6>Parameters</h6>
                    <code>
                       token , news_letter , email 
                    </code>
                </div>
                <div class='mb-3'>
                    <h6>Api</h6>
                    <code>
                        https://api.bimash.com.np/patan/api/v1/post
                    </code>
                </div>
        </div>
    </section>
    <section class="docs-section" id="responseex">
						<h2 class="section-heading">Response Example:</h2>
                        <h4>Success response</h4>
                            <div class="docs-code-block" >
<pre class="shadow-lg rounded">
<code class="json hljs">
{
    "data":
    {
        "success":"200",
        "message":"Created Successful"
    }
}
</code></pre>
            </div>

<h4>Empty Field Response</h4>
            <div class="docs-code-block" >
<pre class="shadow-lg rounded">
<code class="json hljs">
{
    "data":
    {
        "error":"204",
        "message":"Every Field must have certain value"
    }
}
</code></pre>
            </div>
            
<h4>Paramenter Missing Response</h4>
            <div class="docs-code-block" >
<pre class="shadow-lg rounded">
<code class="json hljs">
{
    "data":
    {
        "error":"0x0201",
        "message":"Error { email } keys missing"
    }
}
</code></pre>
            </div>
    </section>
</article>