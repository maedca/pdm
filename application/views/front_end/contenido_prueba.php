
<header id="page-top">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">

                <div class="intro-text">
                    <span class="name">Pro Medios Digitales</span>
                    <span class="icon-font glyphicon glyphicon-star"></span><br>
                    <hr>
                    <br><br>
                    <span class="skills tres-em">Dise&ntilde;o y calidad - Nacidos para estar juntos </span>
                </div>
            </div>
        </div>
    </div>
</header>


<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Servicios</h2>
                <span class="icon-font glyphicon glyphicon-star"></span><br>
                <hr><br><br>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="icon-font glyphicon glyphicon-zoom-in"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/001-01-01.png'); ?>" class="img-responsive" alt="">
                </a>
            </div>
           <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="icon-font glyphicon glyphicon-zoom-in"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/002-01-01.png');?>" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="icon-font glyphicon glyphicon-zoom-in"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/003-01-01.png'); ?>" class="img-responsive" alt="" >
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="icon-font glyphicon glyphicon-zoom-in"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/004-01-01.png'); ?>" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class=" icon-font glyphicon glyphicon-zoom-in"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/005-01-01.png'); ?>" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="icon-font glyphicon glyphicon-zoom-in"></i>
                        </div>
                    </div>
                    <img src="<?php echo base_url('assets/images/005-01-01.png'); ?>" class="img-responsive" alt="">
                </a>
            </div>
        </div>
    </div>
</section>


 <section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Ellos Confían en Nosotros</h2>
                <span class="icon-font glyphicon glyphicon-star"></span><br><hr><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2 text-justify">
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequatur delectus est eveniet qui? Assumenda, at autem commodi consectetur culpa deserunt dignissimos doloribus eligendi impedit minima natus necessitatibus, quaerat, veritatis!</p>-->
            </div>
            <div class="col-lg-4 text-justify">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque commodi doloremque enim eum eveniet fuga harum inventore ipsum itaque iusto laborum molestiae quasi quia quo recusandae, saepe, ut voluptates.</p>
            </div><br><br>
            <div class="col-lg-8 col-lg-offset-2 text-justify">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque deserunt eum molestias nihil pariatur possimus recusandae saepe similique sit? Beatae cum delectus dolorem eaque excepturi facilis fuga natus odio?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid autem iure iusto magni repellendus vel! A, aspernatur beatae dolorem ea expedita id ipsam nam numquam officia, quam, velit vitae voluptatem!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque, error porro reprehenderit tempora veniam vero voluptas. Adipisci cum eos eum facilis fuga praesentium quaerat, quis quos recusandae sunt voluptatum.</p>
            </div>
        </div>
    </div>
</section>


<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contacto</h2>
                <span class="icon-font glyphicon glyphicon-star"></span><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form name="sentMessage" id="contactForm" method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" id="name" name="name" value="<?php echo set_value('name'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Correo Electronico</label>
                            <input type="email" class="form-control" placeholder="Correo Electronico" id="email" name="email" value="<?php echo set_value('email'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Telefono</label>
                            <input type="tel" class="form-control" placeholder="Telefono" id="phone" name="tel" value="<?php echo set_value('tel'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" name="message">
                                <?php echo set_value('message'); ?>
                            </textarea>
                            <p class="help-block text-danger"></p>
                        </div>

                    </div>
                    <input type="hidden" name="token" value="<?php echo $token;?>">

                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            <?php echo validation_errors();?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Aqui Puedes Encontrarnos</h3>
                    <p>Cir 36 A 104 - 25</p>
                    <p>+573158394620</p>
                    <p>+5776950209</p>
                    <p><a href="mailto:contacto@pmd.com.co">contacto@pmd.com.co</a></p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>


                   <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class=" glyphicon glyphicon-star"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class=" glyphicon glyphicon-star"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class=" glyphicon glyphicon-star"></i></a>
                        </li>

                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Additional</h3>
                    <p>
                        <a href="#contact">Contacto</a></p>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy;2015 Pro Medios Digitales S.A.S. Todos los Derechos Reservados
                </div>
            </div>
            <div class="row">
                <!--<div class="col-lg-4 col-lg-offset-8">
                   Formated by <a href="http://www.tercesdesigns.com.ve">Terce</a> with <a href="http://getbootstrap.com">Bootstrap</a> and <a href="http://startbootstrap.com">Freelancer</a>
                    <br>
                    License <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache 2.0</a>
                </div>-->
            </div>
        </div>
    </div>
</footer>


<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Page Title / Description</h2><br>
                        <span class="icon-font glyphicon glyphicon-star"></span><br><hr><br><br>

                        <img src="<?php echo base_url('assets/images/001-01-01.png'); ?>" class="img-responsive img-centered" alt="">
                        <p>Miles de proyectos digitales se lanzan cada hora, menos del 1% serán rentables o exitosos. ¿Por qué? pregúntatelo antes de empezar tu proyecto.
                            Déjanos ayudarte a aumentar significativamente las probabilidades de éxito. Juntos estructuraremos un proyecto sólido.


                        </p>

                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-zoom-out"></span> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Page Title / Description</h2>
                        <span class="icon-font glyphicon glyphicon-star"></span><br><hr><br><br>
                        <img src="<?php echo base_url('assets/images/002-01-01.png'); ?>" class="img-responsive img-centered" alt="">
                        <p> Su página Web necesita ser muy visitada para obtener los resultados que busca. El mercadeo por internet le brinda la mejor relación costo/beneficio gracias a que en nuestro país la gente no ha comprendido su real alcance. Aproveche los bajos costos de este medio para llegarles a clientes específicos de tu segmento de mercado. Imaginamos le ofrece tres diferentes formas de hacer publicidad online:

                        </p>

                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-zoom-out"> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Page Title / Description</h2>
                        <span class="icon-font glyphicon glyphicon-star"></span><br><hr><br><br>
                        <img src="<?php echo base_url('assets/images/003-01-01.png'); ?>" class="img-responsive img-centered" alt="">
                        <p> Todos somos usuarios. Sabemos lo frustrante que es navegar en una aplicación mal pensada. No sometas a tus clientes a esto! Déjanos ayudarte a crear una aplicación web o móvil que de gusto usar. Definimos y diseñamos cada interacción cuidando y pensando cada detalle.


                        </p>

                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-zoom-out"></span> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Page Title / Description</h2>
                        <span class="icon-font glyphicon glyphicon-star"></span><br><hr><br><br>
                        <img src="<?php echo base_url('assets/images/004-01-01.png'); ?>" class="img-responsive img-centered" alt="">
                        <p>Entendemos la importancia que tiene el logo para cada empresa, por esto nos esforzamos por trabajar por nuestros clientes presentándoles opciones hasta que queden totalmente satisfechos. No redactamos largos poemas relatando el significado de su logotipo, interpretamos sus necesidades y las plasmamos en un diseño que le brinde a su empresa reconocimiento, recordación de marca y el orgullo de sus directivos.</p>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-zoom-out"></span> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Page Title / Description</h2>
                        <span class="icon-font glyphicon glyphicon-star"></span><br><hr><br><br>
                        <img src="<?php echo base_url('assets/images/005-01-01.png'); ?>" class="img-responsive img-centered" alt="">
                        <p>Te va a dar tranquilidad trabajar con los mejores desarrolladores de Apps y Software Web. Duerme bien sabiendo que cuentas con un equipo de ingenieros que no está improvisando con tu proyecto. Tenemos experiencia en todos los principales lenguajes de programación.</p>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-zoom-out"></span> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Page Title / Description</h2>
                        <span class="icon-font glyphicon glyphicon-star"></span><br><hr><br><br>
                        <img src="<?php echo base_url('assets/images/005-01-01.png'); ?>" class="img-responsive img-centered" alt="">
                        <p>Te va a dar tranquilidad trabajar con los mejores desarrolladores de Apps y Software Web. Duerme bien sabiendo que cuentas con un equipo de ingenieros que no está improvisando con tu proyecto. Tenemos experiencia en todos los principales lenguajes de programación.</p>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-zoom-out"></span> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>