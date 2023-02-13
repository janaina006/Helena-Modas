
<style>
    @media (max-width:990px){

        .n{
            font-size: 12px;
        }
    }

</style>




{if $PRO_TOTAL < 1}
<H4 class="alert alert-danger">Nenhum produto encontrado!!</H4>
<meta http-equiv="refresh" content=1;url="{$PRODUTOS}">

{/if}


<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            {foreach from=$PRO item=P}
            <div class="col mb-5">
                
                
                <div class="card h-100">
                    <a class="card-title" href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
                    <!-- Product image-->
                    <img class="card-img-top" src="{$P.pro_img}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="n card-title">
                            <!-- Product name-->
                            {$P.pro_nome}
                            <br>
                            <!-- Product price-->
                           <h6>R$ {$P.pro_valor}</h6> 
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a  href="#"></a></div>
                    </div>
                </div>
                
            </div>
            {/foreach}
        </div>
    </div>
</section>

   

    <!-- paginaçao inferior -->
    <section id="pagincao" class="pagination">
        <center>
            {$PAGINAS}
        </center>
    </section>
    <br>
    <br>