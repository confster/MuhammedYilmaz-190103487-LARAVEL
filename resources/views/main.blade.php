<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		body {
    margin: 0px;
    color: #222222;
    font-size: 1em;
    font-family: "Open Sans", "Helvetica Neue", sans-serif;
}

.content-footer,
.masthead-heading,
.masthead-intro {
  text-align: center;
}

.masthead {
  padding: 6em 0;
  background-image: url('https://i.imgur.com/yGmrlyg.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  border-top: solid 1em #FFCF33;
}

.masthead-intro {

    margin-bottom: 0.1em;
  
    font-family: "Gentium Book Basic", Georgia, serif;
    font-size: 2em;
}

.masthead-heading {
  
    color: #F1C863;
    margin-top: -0.2em;

    font-family: "Open Sans", "Helvetica Neue", sans-serif;
    font-weight: bold;
    font-size: 6em;
    letter-spacing: -0.02em;
    text-transform: uppercase;
}

.introduction-section,
.location-section,
.questions-section {
    max-width: 38em;
    margin-left: auto;
    margin-right: auto;
    margin-top: 2em;
}

.introduction-section > p,
.location-section > p,
.questions-section,
.content-footer > p {
   
    font-weight: 300;
    letter-spacing: 0.05em;
}

.questions-section > h2 {
    font-family: "Gentium Book Basic", Georgia, serif;
    font-size: 1.2em;
    font-weight: bold;

    margin: 2em 0 1em 0;
}

section > h1 {
    margin-top: 2em;
}

.content-footer,
.masthead-heading,
.masthead-intro {
  text-align: center;
}

.masthead {
  padding: 6em 0;
  background-image: url('https://i.imgur.com/yGmrlyg.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  border-top: solid 1em #FFCF33;
}

.masthead-intro {
  margin-bottom: 0.1em;
  font-family: "Gentium Book Basic", Georgia, serif;
    font-size: 2em;
}

.masthead-heading {
  margin-top: -0.2em;
  font-family: "Open Sans", "Helvetica Neue", sans-serif;
  font-weight: bold;
  font-size: 6em;
  letter-spacing: -0.02em;
  text-transform: uppercase;
}
.introduction > p,
.location > p,
.content-footer > p {

    font-weight: 300;
    letter-spacing: 0.05em;
}
h2 {

    font-family: "Gentium Book Basic", Georgia, serif;
    font-size: 1.2em;
    font-weight: bold;
}

.introduction-section,
.location-section,
.questions-section {
    max-width: 38em;
    margin-left: auto;
    margin-right: auto;
    margin-top: 2em;
}
.content-footer {
  margin: 50px 0;
  padding: 20px 0;
  text-align: center;
  background-color: #73A8C2;
  text-decoration: none;
}
.social > li {
  display: inline-block;
  margin: 0 5px;
}
.content-footer > p {
  color: #F7EDE1;
}
a {
    font-weight: bold;
    text-decoration: none;
    color: #F1C863;
}
  
@media only screen and (max-width: 500px) {
    .masthead {
        padding: 3em 0;
    }
    .masthead-heading {
        font-size: 3em;
    }
    .content-footer {
        padding: 2em 2.5em;
  }
}

button{
  background: transparent;
  border-radius: 10px;
  padding: 5px 10px;
}


	</style>
</head>
<body>

<header class='masthead'>
  <p class='masthead-intro'>{{__('profile.hiam')}}</p>
  <h1 class='masthead-heading'>{{__('profile.muhammed')}}</h1>
</header>
<section class="introduction-section">
    <a href="{{ route('aboutme') }}"><h1>{{__('profile.whoami')}}</h1></a>
</section>
<section class="location-section">
    
</section>
<section class="questions-section">
    <a href="{{ route('contactme') }}"><h1>{{__('profile.contact')}}</h1></a>
    
</section>

<section class="questions-section">
    <a href="{{ route('blog') }}"><h1>{{__('profile.blog')}}</h1></a>
    
</section>

<footer class="content-footer">
    <ul class="social">
        <li><a class="css-is-deranged" href="https://github.com/confster">{{__('profile.github')}}</a></li>
    </ul>

    <ul class="social">
        <li><a class="css-is-deranged" href="{{ route('locale', 'ru') }}">Language</a></li>
    </ul>
  
</footer>

</body>
</html>