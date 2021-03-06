<style type="text/css">
	body{
		font-family: 'Montserrat', sans-serif;
		font-size: 17px;
		overflow:hidden;
	}
	.transition{
		-webkit-transition: all 0.5s ease;
		-moz-transition: all 0.5s ease;
		-ms-transition: all 0.5s ease;
		-o-transition: all 0.5s ease;
		transition: all 0.5s ease;
	}

	textarea.main::-webkit-scrollbar{
		background:#ddd !important;
		width:10px;
	}

	textarea.main::-webkit-scrollbar-thumb{
		background-image: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.8))!important;width:40px;border-radius:3px !important;
		box-shadow: inset 2px 2px 2px rgba(255,255,255,.25), inset -2px -2px 2px rgba(0,0,0,.25)
	}

	a:hover{text-decoration: none;}

	.clear, .clear10, .clear20, .clear30, .clear40, .clear50, .clear60, .clear70, .clear80, .clear90, .clear100{ width: 100%; clear: both; }
	.clear10{ height: 10px; }
	.clear20{ height: 20px; }
	.clear30{ height: 30px; }
	.clear40{ height: 40px; }
	.clear50{ height: 50px; }
	.clear60{ height: 60px; }
	.clear70{ height: 70px; }
	.clear80{ height: 80px; }
	.clear90{ height: 90px; }
	.clear100{ height: 100px; }

	body {
		background: #000;
	}
	textarea.main {
		float: left;
		width: 90%;
		margin-left: 5%;
		margin-right: 5%;
		padding: 20px;
		color: #fff;
		background: transparent;
		border: solid 1px #ccc;
		resize: none;
		box-sizing: border-box;
	}
	.version {
		position: fixed;
		left: 0;
		bottom: 0;
		border: solid 1px rgba(255,255,255,0.05);
		border-bottom: none;
		border-left: none;
		font-size: 11px;
		padding: 5px;
		border-radius: 0 10px 0 0;
		color: rgba(255,255,255,0.1);
	}
	.version:hover {
		border-color: #fff;
		color: #fff;
	}
	.control-panel {
		position: absolute;
		right: 30px;
		bottom: 0;
		width: 200px;
		border: solid 1px #fff;
		border-bottom: none;
		background: #000;
		padding: 15px;
		border-radius: 10px 0 0 0;
	}
	.control-panel-toggle {
		position: absolute;
		right: -1px;
		top: -27px;
		border: solid 1px #fff;
		border-bottom: none;
		border-radius: 10px 10px 0 0;
		background: #000;
		color: #fff;
		width: 30px;
		height: 26px;
		line-height: 30px;
		text-align: center;
		font-size: 12px;
		cursor: pointer;
	}
	.control {
		float: left;
		width: 100%;
		color: #fff;
	}
	.control.font-size button {
		cursor: pointer;
		margin-left: 10px;
		height: 24px;
		width: 24px;
	}
</style>
