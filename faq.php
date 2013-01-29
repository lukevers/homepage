<!DOCTYPE>
<html>
    <head>
    	<title>Maryland Meshnet</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/icon_16.png">
    </head>
    <body>
    	<div class="center">
        	<?php require("header.php"); ?>
            <div class="wrap">
            	<div class="header">
                	Frequently Asked Questions
                </div>
                
                <a href="#meshnet" class="nocolor"><div class="question">
                	What is a meshnet?
                </div></a>
                <div class="answer" id="meshnet">
                	<p>A meshnet is a network in which users connect with
                	each other, rather than being dependent on a
                	"tree" of providers. This means that a meshnet
                	depends on collaboration between neighbors, and
                	anyone can have access.</p>
                </div>

                <a href="#problems" class="nocolor"><div class="question">
                	What are the problems with what we have now?
                </div></a>
                <div class="answer" id="problems">
                	<p>There a number of big problems with the existing
                	Internet. The first to address is freedom and
                	scalability. As it stands, the address space
                	that's available to consumers is controlled by
                	large Internet Service Providers (ISP), such as
                	Comcast	or Verizon. Thus, even if a consumer owned
                	the	equipment to be connected, they wouldn't be
                	without paying a subscription fee.</p>
					<p>The Internet is an extremely important mode of
                	communication, which is becoming increasingly so,
                	in the family and business worlds. Allowing it to
                	be controlled completely by any one set of
                	entities is dangerous. What is to keep one's ISP
                	from cutting off their access unfairly?</p>
					<p>Another problem is price. The Internet, in the
                	United States, is not considered a utility. Nor is
                	it subject to strict rules regarding monopoly. The
                	Internet is increasingly necessary, and the price
                	to acccess it in the United States is
                	significantly greater than that elsewhere in the
                	developed world. Furthermore, the speeds and
                	reliability are poor compared to those in
                	Europe.</p>
                </div>
                
                <a href="#hyperboria" class="nocolor"><div class="question">
                	What is hyperboria, and how does it help?
                </div></a>
                <div class="answer" id="hyperboria">
                	<p>Hyperboria (also known as "the meshnet") is the
                	name given to the network central to
                	<a href="https://projectmeshnet.org">Project
                	Meshnet</a>. It is a meshnet with, at the
                	beginning of 2013, over three hundred members
                	spread across the world, including Maryland. It
                	uses the open-source software
                	<a href="https://github.com/cjdelisle/cjdns#readme">CJDNS</a>
					to connect its members, both through the existing
					Internet and via physical wireless (and wired)
					links. Together, we make up Hyperboria.</p>

					<p>Hyperboria is free, in every sense of the
					word. There is no subscription fee, and there are
					no restrictions on what you can say or who you
					talk to. Details on connecting
					are <a href="#connect">below</a>.</p>
                </div>
                
                <a href="#maryland" class="nocolor"><div class="question">
                	Why <i>Maryland</i> Meshnet?
                </div></a>
                <div class="answer" id="maryland">
                	<p>Maryland Meshnet is not the first of its kind; 
                    it is preceded by Seattle Mesh and New York Mesh. 
                    It is, however, the first attempt to create a statewide 
                    <a href="#meshlocal">meshlocal</a>. Its activity and members 
                    (centering around University of Maryland Baltimore County) make it an exemplary one.</p>
                </div>
               <!-- 
                <a href="#coverage" class="nocolor"><div class="question">
                	What sort of coverage is there now?
                </div></a>
                <div class="answer" id="coverage">
                	Answer.
                </div>
                
                <a href="#start" class="nocolor"><div class="question">
                	How can I get on?
                </div></a>
                <div class="answer" id="start">
                	Answer.
                </div>
                
                <a href="#cost" class="nocolor"><div class="question">
                	How much would it cost me?
                </div></a>
                <div class="answer" id="cost">
                	Answer.
                </div>
				-->
                
                <a href="#connect" class="nocolor"><div class="question">
                	How can I connect?
                </div></a>
                <div class="answer" id="connect">
				  <p>Connecting to Hyperboria is simple, but bear in mind
                  that it is not yet a "push button" process. To
                  connect, you will need connection details from
                  someone who is already part of the network.
                  Preferably, they should be geographically close to
                  you. Finding such a person can be done
                  on <a href="http://chat.efnet.org:9090/?channels=#marylandmesh&Login=Login">IRC</a>, 
                  <a href="http://reddit.com/r/marylandmesh">reddit</a>,
                  or on our <a href="contact.php#mailinglist">mailing list</a>. We'll
                  walk you through the process of connecting with as
                  much or as little assistance as you need. We're
                  usually around, and we're always happy to
                  help.</p>
                </div>

				<a href="#active" class="nocolor"><div class="question">
        			How many active nodes are there right now?
				</div></a>
				<div class="answer" id="active">
					<p>There are about 300+ nodes up at any given time.
                    There's a large number of nodes everywhere running CJDNS.
                    The best way to see the active and potential nodes for the
                    Maryland Meshnet, exclusively, is to view our <a href="http://maryland.ninux.org/">nodeshot instance</a>.
                </div>
                <p><sub><i>Didn't answer your questions? Feel free to <a href="contact.php">contact</a> us, 
                <a href="https://github.com/marylandmesh/homepage/issues/new">submit an issue</a>, or shoot us
                an <a href="contact.php#email">email</a>.</i></sub></p>
            </div>
            <hr>
            <?php require("footer.php"); ?>
        </div>        
    </body>
</html>
