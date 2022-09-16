<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style.css')}}">

    <title>Laravel</title>
    <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
	box-sizing: border-box;
}

body {
	background-color: #28223F;
	font-family: Montserrat, sans-serif;
	
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;

	min-height: 100vh;
	margin: 0;
}

h3 {
	margin: 10px 0;
}

h6 {
	margin: 5px 0;
	text-transform: uppercase;
}

p {
	font-size: 14px;
	line-height: 21px;
}

.card-container {
	background-color: #231E39;
	border-radius: 5px;
	box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
	color: #B3B8CD;
	padding-top: 30px;
	position: relative;
	width: 350px;
	max-width: 100%;
	text-align: center;
}

.card-container .pro {
	color: #231E39;
	background-color: #FEBB0B;
	border-radius: 3px;
	font-size: 14px;
	font-weight: bold;
	padding: 3px 7px;
	position: absolute;
	top: 30px;
	left: 30px;
}

.card-container .round {
	border: 1px solid #03BFCB;
	border-radius: 50%;
	padding: 7px;
}

button.primary {
	background-color: #03BFCB;
	border: 1px solid #03BFCB;
	border-radius: 3px;
	color: #231E39;
	font-family: Montserrat, sans-serif;
	font-weight: 500;
	padding: 10px 25px;
}

button.primary.ghost {
	background-color: transparent;
	color: #02899C;
}

.skills {
	background-color: #1F1A36;
	text-align: left;
	padding: 15px;
	margin-top: 30px;
}

.skills ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.skills ul li {
	border: 1px solid #2D2747;
	border-radius: 2px;
	display: inline-block;
	font-size: 12px;
	margin: 0 7px 7px 0;
	padding: 7px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
    </style>
</head>

<body>
    @if(isset($nrp))
    @if ($nrp == "160419107")
    <div class="card-container">
        <img class="round" src="https://awsimages.detik.net.id/community/media/visual/2022/08/26/jennie-blackpink-2_43.jpeg?w=700&q=90" />
        <h3>Margareta Yubella</h3>
        <h6>{{$nrp}}</h6>
        <p>Asal Kediri <br/> Hobi Salto</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
            <button class="primary ghost">
                Following
            </button>
        </div>
        <div class="skills">
            <h6>Skills</h6>
            <ul>
                <li>UI / UX</li>
                <li>Front End Development</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>React</li>
                <li>Node</li>
            </ul>
        </div>
    </div>
    @elseif ($nrp == "160419083")
    <div class="card-container">
        <img class="round" src="https://kpopnews.atsit.in/id/wp-content/uploads/2022/01/lisa-blackpink-iu-dan-lainnya-inilah-idola-k-pop-wanita-yang-paling-banyak-ditelusuri-di-youtube-seluruh-dunia-pada-tahun-2021.jpg"/>
        <h3>Devina Aprilia</h3>
        <h6>{{$nrp}}</h6>
        <p>Asal Jerman <br/> Hobi Tidur</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
            <button class="primary ghost">
                Following
            </button>
        </div>
        <div class="skills">
            <h6>Skills</h6>
            <ul>
                <li>UI / UX</li>
                <li>Front End Development</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>React</li>
                <li>Node</li>
            </ul>
        </div>
    </div>
    @else
    <div class="card-container">
        <img class="round" src="https://awsimages.detik.net.id/community/media/visual/2022/08/26/jennie-blackpink-2_43.jpeg?w=700&q=90" />
        <h3>Elsafira Gita</h3>
        <h6>{{$nrp}}</h6>
        <p>Asal Banyuwangi <br/> Hobi Makan</p>
        <div class="buttons">
            <button class="primary">
                Message
            </button>
            <button class="primary ghost">
                Following
            </button>
        </div>
        <div class="skills">
            <h6>Skills</h6>
            <ul>
                <li>UI / UX</li>
                <li>Front End Development</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>React</li>
                <li>Node</li>
            </ul>
        </div>
    </div>
    @endif
    @else
    <table id="customers">
        <tr>
            <th>Nama</th>
            <th>NRP</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>Margareta Yubella</td>
            <td>160419107</td>
            <td>
                <a href="myfriend/160419107">View</a>
            </td>
        </tr>
        <tr>
            <td>Devina Aprilia</td>
            <td>160419083</td>
            <td>
                <a href="myfriend/160419083">View</a>
            </td>
        </tr>
    </table>

    @endif
</body>