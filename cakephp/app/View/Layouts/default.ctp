<!DOCTYPE html>

<html>

<head>
    <title><?php echo $title_for_layout ?> | WTISC 2012 - III Workshop de Tecnologia da Informação do Sertão Central</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            
    <?php echo $this->Html->css('style') ?>
            
</head>
<body>
<div id="wrapper">
	<div id="header">
        <h1><?php echo $this->Html->link('WTISC', array('controller' => 'pages','action' => 'display','home')) ?></h1>          
    </div>
    <div id="menu_wrapper">
        <div id="menu">
            <ul>
                <li><?php echo $this->Html->link('o evento', array('controller' => 'pages','action' => 'display','home')) ?></li>
                <li><?php echo $this->Html->link('programação', array('controller' => 'pages','action' => 'display','programacao')) ?></li>
                <li><a href="">inscrições</a></li>
                <li><a href="">patrocinadores</a></li>
                <li><a class="last" href="">fale conosco</a></li>
            </ul>
        </div>
    </div>                
	<div id="contentcolumn">
		<div id="content">
            <div id="contentmain">
            
            
            <?php echo $content_for_layout ?>				
				
				
            </div>
		</div>
	</div>				
	<div id="rightcolumn">
		<div id="contentrightcolumn">
            <div style="margin:20px 0 0 15px;">
		    	<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '#wtisc2012',
				  title: 'WTISC 2012',
				  subject: '#wtisc2012',
				  interval: 30000,
				  width: 250,
				  height: 300,
				  theme: {
				    shell: {
				      background: '#B8DB7C',
				      color: '#003300'
				    },
				    tweets: {
				      background: '#FFFFFF',
				      color: '#000000',
				      links: '#003300'
				    }
				  },
				  features: {
				    scrollbar: false,
				    loop: true,
				    live: true,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
		    </div>
		</div>
	</div>				
	<div id="footer">
		<p>
			<strong>Realização: </strong><a href="http://www.quixada.ufc.br/" rel="external" target="_blank" style="color:#030;">Universidade Federal do Ceará - Campus Quixadá</a><br />
			<strong>Organização:</strong> <a href="http://www.si.ufc.br/pet/" rel="external" target="_blank" style="color:#030;">PET-SI - Programa de Educação Tutorial - Sistemas de Informação</a><br />
		</p>
    </div>
</div>
</body>
</html>