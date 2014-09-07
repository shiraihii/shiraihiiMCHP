	<body class="bs-docs-home">
		<header class="navbar navbar-fixed-top bs-docs-nav" id="top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
					</button>
					<a href="index.php" class="navbar-brand">FZ第二人生部</a>
				</div>
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<ul class="nav navbar-nav">
						<li<?php if($SUBINDEX==0) echo ' class="active"' ?>>
							<a href="index.php" target="_top">服务器简介</a>
						</li>
						<li<?php if($SUBINDEX==1) echo ' class="active"' ?>>
							<a href="intro.php" target="_top">世界介绍</a>
						</li>
						<li<?php if($SUBINDEX==2) echo ' class="active"' ?>>
							<a href="rule.php" target="_top">入住须知</a>
						</li>
						<li<?php if($SUBINDEX==3) echo ' class="active"' ?>>
							<a href="map.php" target="_top">实况地图</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
