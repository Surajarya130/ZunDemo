<div class="wrapper">
        <div>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, doloremque. Exercitationem fugiat at, 
            amet beatae possimus sed nihil consequuntur unde, corrupti illo 
            sapiente! Natus officiis eum veniam eligendi quos autem nobis recusandae fugiat esse voluptatum delectus,
            illum unde sapiente obcaecati atque tempora distinctio neque impedit itaque 
            quaerat maiores placeat laborum ipsum. Recusandae sequi iste tempora vero dignissimos 
            iure exercitationem corrupti fuga aut odio quisquam culpa sapiente laborum accusantium rem laudantium, 
            cupiditate reprehenderit nulla possimus numquam! Eius aspernatur praesentium totam vitae?
        </div>

        <div>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium sapiente reiciendis consectetur quasi ipsa itaque necessitatibus natus aliquid 
            exercitationem accusamus inventore maiores dolores eos recusandae, voluptas voluptatum? Accusamus, facere molestias!
        </div>
    </div>

    <br>

    <div class="wrapper2">
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa asperiores fugiat quibusdam doloremque voluptatibus, minima adipisci, impedit officiis delectus odio tenetur amet aspernatur veritatis maiores numquam necessitatibus explicabo, iusto dolorem? 
        </div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
        <div>Lorem ipsum dolor sit amet.</div>
    </div>















    .wrapper > div{
    background-color: #eee;
    padding: 1em;
}

.wrapper > div:nth-child(odd){
    background-color: #ddd;
}

.wrapper{
    display: grid;
    grid-template-columns: 65% 30%;
    grid-gap: 5%;
}


.wrapper2{
    display: grid;
    grid-template-columns: 1fr 1fr 2fr 1fr 1fr;
    grid-gap: 1em;
    /* grid-auto-rows: 100px; */
    grid-auto-rows: minmax(100px, auto);
}

.wrapper2 > div{
    background-color: #eee;
    padding: 1em;
}

.wrapper2 > div:nth-child(odd){
    background-color: #ddd;
}

@media only screen and (max-width:400px){
    .wrapper2{
        grid-template-columns: 1fr;
    }

}




