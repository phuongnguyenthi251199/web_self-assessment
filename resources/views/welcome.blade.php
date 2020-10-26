<!DOCTYPE html>
<html lang="en">
<head>
    <title>World Tree Preservation Website Template</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header">
    <div>
        <a href="http://localhost:81/tudanhgia/public/" id="logo"><img src="{{URL::asset('images/logo.png')}}"
                                                                       alt="logo"></a>
        <div>
            <a href="donate.html">donate</a>
            <ul>
                <li class="selected">
                    <a href="http://localhost:81/tudanhgia/public/">Home</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="gallery.html">Gallery</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    @if (Route::has('login'))

                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Dashboard</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif

                    @endif
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="body">
    <div class="home">
        <div class="featured">
            <div>
                <p>
                    As The Saying Goes.. <br> You Don’t Know What You’ve Got <br> ‘Till It’s Gone.
                </p>
                <h2>Plant A Tree. <br><br> Grow A Tree. <br><br> <span>Save The Future.</span></h2>
            </div>
        </div>
        <div class="section">
            <div>
                <div>
                    <a href="programs.html"><img src="{{URL::asset('images/help-out.jpg')}}" alt=""></a>
                    <p>
                        This website template has been designed by Free Website Templates for you, for free. You can
                        replace all this text with your own text.
                    </p>
                </div>
                <div>
                    <h3><a href="programs.html">Top Programs</a></h3>
                    <ul>
                        <li>
                            <a href="programs.html"><img src="{{URL::asset('images/top-program1.jpg')}}" alt=""></a>
                            <h4><a href="programs.html">Tree Planting</a></h4>
                            <p>
                                If you're having problems editing this website template.
                            </p>
                        </li>
                        <li>
                            <a href="programs.html"><img src="{{URL::asset('images/top-program2.jpg')}}" alt=""></a>
                            <h4><a href="programs.html">Paper Recycling</a></h4>
                            <p>
                                Then don't hesitate to ask for help on the.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <a href="programs.html"><img src="{{URL::asset('images/what-we-do.jpg')}}" alt=""></a>
                    <p>
                        You can remove any link to our website from this website template, you're free to use this
                        website template without linking back to us.
                    </p>
                </div>
                <div>
                    <h3><a href="blog.html">Recent Blog Posts</a></h3>
                    <ul>
                        <li>
                            <a href="blog.html"><img src="{{URL::asset('images/blog-post1.jpg')}}" alt=""></a>
                            <div>
                                <h4><a href="blog.html">Blog Post Title One</a></h4>
                                <p>
                                    You're free to use this website template without linking back to us.If you're having
                                    problems editing this website template, then don't hesitate to ask for help on the
                                    Forums... <a href="blog.html" class="more">Read More</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <a href="blog.html"><img src="{{URL::asset('images/blog-post2.jpg')}}" alt=""></a>
                            <div>
                                <h4><a href="blog.html">Blog Post Title Two</a></h4>
                                <p>
                                    You can do a lot with them. You can modify them. You can use them to design websites
                                    for clients, so long as you agree with the Terms of Use. You can even remove all
                                    our... <a href="blog.html" class="more">Read More</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="footer">
    <div>
        <div>
            <h4>24 hour customer service</h4>
            <ul>
                <li class="phone-num">
                    512-943-1069 <br> 512-943-1068
                </li>
                <li class="email">
                    <a href="#">info@WTPcom</a>
                </li>
                <li class="address">
                    1341 Oakmound Drive <br> Chicago, IL 60609
                </li>
            </ul>
        </div>
        <div>
            <h4>Recent Tweets</h4>
            <ul>
                <li>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fringilla elementum magna.
                    </p>
                    - <span><a href="blog.html">1 day ago</a></span>
                </li>
                <li>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                    - <span><a href="blog.html">2 days ago</a></span>
                </li>
            </ul>
        </div>
        <div class="connect">
            <h4>Get in touch with us</h4>
            <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">Facebook</a> <a
                    href="http://freewebsitetemplates.com/go/twitter/" id="twitter">Twitter</a> <a
                    href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">Google+</a>
            <form action="about.html">
                <h4>Newsletter Signup</h4>
                <input type="text" value="Enter email address"
                       onblur="this.value=!this.value?'Enter email address':this.value;" onfocus="this.select()"
                       onclick="this.value='';">
                <input type="submit" id="submit" value="">
            </form>
        </div>
    </div>
    <div>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <a href="programs.html">Our Programs</a>
            </li>
            <li>
                <a href="gallery.html">Gallery</a>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
            <li>
                <a href="blog.html">Blog</a>
            </li>
        </ul>
        <p>
            &#169; 2023 World Tree Preservation. All Rights Reserved
        </p>
    </div>
</div>
</body>
</html>
