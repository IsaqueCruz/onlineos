<style>
.site-nav-links {
list-style: none;
}

.site-nav-links li {
font-size: 16px;
}

.site-nav-links li a span {
display: inline-block;
font-size: 15px;
vertical-align: -1px;
margin-right: 4px;
width: 15px;
}

.d-icon-network:before {
content: "\e00a";
}
.d-icon-discover:before {
content: "\e00e";
}

.d-icon-home:before {
content: "\e00a";
} 

.d-icon-add:before {
content: "\e00b";
}

.d-icon-settings:before {
content: "\e00c";
}

.site-nav-links li.on a {
color: #0b79e5;
font-weight: 500;
}

.site-nav-links li.on a {
color: #0b79e5;
background: #fff;
font-weight: 500;
}
.site-nav-links li a {
display: block;
width: 83%;
height: auto;
padding: 9px 20px;
-webkit-transition: background .2s ease;
transition: background .2s ease;
}

.site-nav-profile {
padding: 0 20px;
font-size: 16px;
line-height: 40px;
}

.site-nav-profile .site-nav-user-link {
display: block;
float: left;
max-width: 140px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}
.sidebar a {
color: #fff;
}

.site-nav-search {
position: relative;
clear: both;
}

.load-more {
position: fixed;
left: 0;
right: 0;
bottom: 0;
width: 100%;
height: 50px;
color: #999;
background: -webkit-radial-gradient(50% 100%,farthest-side,rgba(7,130,255,.8),rgba(255,255,255,0)) 0 100%;
background: radial-gradient(farthest-side at 50% 100%,rgba(7,130,255,.8),rgba(255,255,255,0)) 0 100%;
background-attachment: local;
pointer-events: none;
opacity: 0;
-webkit-transition: opacity 1.5s ease 1s;
transition: opacity 1.5s ease 1s;
z-index: 1030;
}

.sidebar {
position: relative;
top: 5px;
left: 0;
width: 240px;
height: 70%;
color: #fff;
background: #0b79e5;
font-weight: 200;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
z-index: 1030;
-webkit-transform: translate3d(0,0,0);
-webkit-backface-visibility: hidden;
-webkit-perspective: 1000;
}

.site-nav-search input {
color: #fff;
width: 96%;
padding: 0 20px 0 44px;
margin: 0;
border: 0;
background: #0065c7;
height: 40px;
font-weight: 200;
text-overflow: ellipsis;
-webkit-transition: background .1s ease,color .1s ease,padding .4s ease;
transition: background .1s ease,color .1s ease,padding .4s ease;
border-radius: 0;
}

.site-nav-search form {
margin-bottom: 0;
}

.site-nav-search form:before {
position: absolute;
top: 1px;
left: 20px;
display: block;
width: 17px;
font-size: 15px;
line-height: 40px;
color: #9dc9f5;
overflow: hidden;
-webkit-transition: width .4s ease,opacity .3s ease .15s;
transition: width .4s ease,opacity .3s ease .15s;
}

[data-icon]:before {
font-family: 'Delicious Next';
content: attr(data-icon);
speak: none;
font-weight: 400;
font-variant: normal;
text-transform: none;
line-height: 1;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}

.content-wrapper {
position: relative;
margin-left: 240px;
height: 100%;
}


</style>

<div class="sidebar" style="display: block;"><aside class="site-nav" tabindex="1">
  <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->


  <div class="site-nav-profile">
    <a href="/" class="site-nav-user-link">
      <div class="logo site-nav-logo">
        <i class="s1"></i>
        <i class="s2"></i>
        <i class="s3"></i>
        <i class="s4"></i>
      </div>
      
        Isaque Silva Cruz
      
    </a>
    
      <a href="/logout" class="site-nav-sign-out pull-right">Sign out</a>
    
  </div>
  <!-- .site-nav-profile -->

  <div class="site-nav-search">
    <form id="location-bar" data-icon="">
      <input type="text" name="site-search" value="" id="site-search" placeholder="Search…" spellcheck="false">
      <ul class="list-group search-bar-tip" style="display: none;">
        <li class="list-group-item help">Search Tips</li>
        <li class="list-group-item help"><b>#tagname</b><br>Search a specific tag</li>
        <li class="list-group-item help"><b>@username</b><br>Search a specific user</li>
        <li class="list-group-item help"><b>keywords</b><br>Search specific keywords</li>
        <li class="list-group-item help"><b>@username #tagname</b><br>Search tags for a specific user</li>
        <li class="list-group-item help"><b>@username keywords</b><br>Search keywords for a specific user</li>
        <li class="list-group-item help"><b>http://</b><br>Search a specific web page on Delicious</li>
      </ul>
    </form>
  </div>
  <!-- .site-nav-search -->

  <ul class="site-nav-links">
    
      <li class="nav-item-home on"><a href="/"><span class="d-icon-home"></span> My Links</a></li>
      

    <li class="nav-item-network">
      <a href="/network" class="login-check"><span class="d-icon-network"></span> Network</a>
    </li>
    <li class="nav-item-discover">
      <a href="/discover" class="login-check"><span class="d-icon-discover"></span> Discover</a>
    </li>
    <li class="nav-item-add"><a href="#link"><span class="d-icon-add"></span> Add Link</a></li>
    
      <li class="nav-item-settings"><a href="/settings"><span class="d-icon-settings"></span> Settings</a></li>
    
  </ul>
  <!-- .site-nav-links -->

  <div class="site-nav-footer">
    <ul class="meta-links lowercase">
      <li><a href="/help">Help</a></li>
      <li><a href="/apps">Apps</a></li>
      <li><a href="/tools">Tools</a></li>
      <li><a href="http://blog.delicious.com">Blog</a></li>
    </ul>
    © <a href="http://avos.com/">AVOS Systems, Inc.</a>
  </div>
  <!-- .site-nav-footer -->

  <div class="site-nav-toggle">
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>
  <!-- .site-nav-toggle -->
</aside>
<!-- .site-nav -->
</div>