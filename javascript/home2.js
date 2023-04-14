let searchbtn = document.querySelector('.home2-searchbtn');
let closebtn = document.querySelector('.home2-closebtn');
let searchbox = document.querySelector('.home2-searchbox');
let navigation = document.querySelector('.home2-navigation');
let menutoggle = document.querySelector('.home2-menutoggle');
let header = document.querySelector('header');
searchbtn.onclick= function(){
    searchbox.classList.add('active');  
    searchbtn.classList.add('active');
    closebtn.classList.add('active');
    menutoggle.classList.add('hide');
    header.classList.remove('open');
}
closebtn.onclick= function(){
    searchbox.classList.remove('active');
    searchbtn.classList.remove('active');
    closebtn.classList.remove('active');
    menutoggle.classList.remove('hide');
    
}
menutoggle.onclick= function(){
    header.classList.toggle('open');
    searchbox.classList.remove('active');
    searchbtn.classList.remove('active');
    closebtn.classList.remove('active');
}

