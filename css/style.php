<style type="text/css">
	*{
		margin: 0;padding:0; box-sizing: border-box;
		font-family: 'Muli', sans-serif;
	}
	html{
		scroll-behavior: smooth;
	}
	.nav_style{
		background-color: #a29bfe!important; 
	}
	.nav_style a{
		color: white;
	}
	/*//////main header///*/
	.main_header{
		height: 450px;
		width: 100%;

	}
	.rightside h1{
		font-size: 3rem;
	}
	.corona img{
		animation: corona 3s linear infinite;
	}
	@keyframes corona{
		0% {transform: rotate(0);}
		100% {transform: rotate(360deg);}
	}
	.left_side img{
		animation: heartbeat 5s linear infinite;
	}
	@keyframes heartbeat{
		0%{transform: scale(.75);}
		20%{transform: scale(1);}
		40%{transform: scale(.75);}
		60%{transform: scale(1);}
		80%{transform: scale(.75);}
		100%{transform: scale(.75);}
	}
	.corona_updates{
		margin: 0 0 30px 0;
	} 
	.corona_updates h3{
		color: #ff7675;
	}
	.sub_section{
		background-color: #fbfafd;
	}
	.footer_style{
		background-color: #a29bfe;!important;
	}
	.footer_style p{
	margin: 0;
	}
	#myBtn{
		display: none;
		position: fixed;
		bottom: 30px;
		right: 40px;
		z-index: 99;
		border: none;
		outline: none;background-color:#00A8FF;
		color: white;
		cursor: pointer;
		padding: 10px;
		border-radius: 10px;

	}
	#myBtn:hover{
		background: #606060;
	}
	/*//////////////////////////responsive/////////////////////////////*/
	@media(max-width: 768px){
		.main_header{height: 700px;text-align: center;}
		.main_header h1{
			text-align: center;
			padding: 0;
			width: 100%;
			font-size: 30px;
		}
	}
</style>