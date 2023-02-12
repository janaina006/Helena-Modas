<style>
  .button-85 {
   text-decoration:none;
   padding: 0.5em 2em;
   border: none;
   outline: none;
   color: rgb(255, 255, 255);
   background:#C1B3FB;
 ;
   cursor: pointer;
   position: relative;
   z-index: 0;
   border-radius: 10px;
   user-select: none;
   -webkit-user-select: none;
   touch-action: manipulation;
 }
 
 .button-85:before {
   content: "";
   background: linear-gradient(
     50deg,
     #C1B3FB,
     #AB4DB5,
     #9949E7,
     #8868DD,
     #C1B3FB,
     #AB4DB5,
     #9949E7,
     #8868DD
     
   );
   position: absolute;
   top: -2px;
   left: -2px;
   background-size: 400%;
   z-index: -1;
   filter: blur(5px);
   -webkit-filter: blur(5px);
   width: calc(100% + 4px);
   height: calc(100% + 4px);
   animation: glowing-button-85 20s linear infinite;
   transition: opacity 0.3s ease-in-out;
   border-radius: 10px;
 }
 
 @keyframes glowing-button-85 {
   0% {
     background-position: 0 0;
   }
   50% {
     background-position: 400% 0;
   }
   100% {
     background-position: 0 0;
   }
 }
 
 .button-85:after {
   text-decoration:none;
   z-index: -1;
   content: "";
   position: absolute;
   width: 100%;
   height: 100%;
   background: transparent;
   left: 0;
   top: 0;
   border-radius: 10px;
 }
 
 
 @keyframes btn-anim4 {
   0% {
     bottom: -100%;
   }
   50%,100% {
     bottom: 100%;
   }
 }
 
 @media (max-width:767px){
 
       .b{
        padding-top: 30%;
        position: absolute;
       }
   }
 @media (max-width:566px){
 
       .b{
        padding-top: 31%;
        position: absolute;
       }
   }
 @media (max-width:510px){
 
       .b{
        padding-top: 35%;
        position: absolute;
       }
   }
 @media (max-width:458px){
 
       .b{
        padding-top: 39%;
        position: absolute;
       }
   }
 @media (max-width:405px){
 
       .b{
        padding-top: 44%;
        position: absolute;
       }
   }
 @media (max-width:370px){
 
       .b{
        padding-top: 50%;
        position: absolute;
       }
   }
 
 </style>
 
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
 <!------ Include the above in your HEAD tag ---------->
 <br>
 <br>
 <br>
 <div class="container contact-form">
             <div class="contact-image">
                 <!-- <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/> -->
             </div>
             <form  action="envio"> 
                 <h3>Fale Conosco</h3>
                <div class="row">
                     <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" name="txtName" class="form-control" placeholder="Seu nome *" value="" required />
                         </div>
                         <div class="form-group">
                             <input type="email" name="txtEmail" class="form-control" placeholder="Seu Email *" value="" required/>
                         </div>
                         <div class="form-group">
                             <input type="text" name="txtPhone" class="form-control" placeholder="Número de telefone *" value="" required/>
                         </div>
                         <div class="b form-group">
                             <input type="submit" name="btnSubmit" class="button-85" value="Enviar" />
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <textarea name="txtMsg" class="form-control" placeholder="Sua mensagem *" style="width: 100%; height: 150px;"></textarea>
                         </div>
                     </div>
                 </div>
             </form>
 </div>
 <br>
 <br>
 <br>