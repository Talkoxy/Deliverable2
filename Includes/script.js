let cart = document.querySelectorAll('.subtncart')

let files = [
    {
        Name: 'Now you dont',
        tag :'NYD',
        Price:200,
        QuantityinCart:0

    },

    {
        Name: 'Now you SEE',
        tag :'NYS',
        Price:200,
        QuantityinCart:0

    },

    {
        Name: 'A Happy Place',
        tag :'AHP',
        Price:200,
        QuantityinCart:0

    },

    {
        Name: 'From Space',
        tag :'FSP',
        Price:200,
        QuantityinCart:0

    },

    {
        Name: 'Natural Resource',
        tag :'NRS',
        Price:200,
        QuantityinCart:0

    },

    {
        Name: 'To have a voice',
        tag :'THV',
        Price:200,
        QuantityinCart:0

    },

]



for(let i=0; i< cart.length; i++){
    cart[i].addEventListener('click',() => { 
        Cartid(files[i]);
        
    })
}


function onLoad(){
    
    let ProjectNum = localStorage.getItem('Cartid');

    if(ProjectNum){
    document.querySelector('.cart span').textContent = ProjectNum;
    }


}


function Cartid(files){
    console.log("the product clicked is",files);
    let ProjectNum = localStorage.getItem('Cartid');

    ProjectNum= parseInt(ProjectNum);

    if(ProjectNum){

        localStorage.setItem('Cartid',ProjectNum + 1 );
        document.querySelector('.cart span').textContent = ProjectNum + 1;

    }else{
        localStorage.setItem('Cartid',1);
        document.querySelector('.cart span').textContent = 1;
    }
    
  
}


onLoad();