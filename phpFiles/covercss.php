body,html
{
	margin:0;
	padding:0;
	width:100%;
	height:100vh;
	font-family:sans-serif;
}
.section_top
{
width:100%;
height:100%;
overflow:hidden;
position:relative;
background-image:url("eight.jpg");
background-position:center;
background-color:no-repeat;
background-size:cover;
text-align:center;
justify-content:center;
animation:change 15s infinite ease-in-out;
}
.content{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	text-transform:uppercase;
}
.content a{
	background:#85c1ee;
	padding:10px 24px;
	text-decoration:none;
	font-size:18px
	border-radius:20px;
}
.content a:hover
{
background:#034e88;
color:#ffff;
}
@keyframes change{
	0%
	{
		background-image:url("d1.jpg");
	}
	20%
	{
		background-image:url("d2.jpg");
	}
	40%
	{
		background-image:url("d3.jpg");
	}
	60%
	{
		background-image:url("d4.jpg");
	}
	80%
	{
		background-image:url("d5.jpg");
	}
	80%
	{
		background-image:url("d6.jpg");
	}
}
	