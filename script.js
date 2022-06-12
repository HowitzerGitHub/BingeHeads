// OMDB
// search for hard = https://www.omdbapi.com/?s=hard&apikey=9c92906e
const api_key_dig='9c92906e';
const API_KEY = '&apikey=9c92906e';
const BASE_SEARCH = 'https://www.omdbapi.com/?s=';
const BASE_SEARCH_MovieInfo = 'https://www.omdbapi.com/?i='; //using iMDB id
const main = document.getElementById('main');
var term ='avengers';
var page = 1;
var playlists='';

// create search query as -> BASE_SEARCH + 'search term' + API_KEY;
landing_url=BASE_SEARCH+term;
getPlaylists();

getMovies(landing_url);

function getMovies(url) {
    url=url+'&page='+page+API_KEY;
    fetch(url).then(res => res.json()).then(data =>{
        showMovies(data.Search);
    });
}



function showMovies(data){
    if(page==1)
    main.innerHTML = '';
    // console.log(data);
    data.forEach(movie => {
        const{Title,Poster,imdbID,Year,Type} = movie;
        url=BASE_SEARCH_MovieInfo+imdbID+API_KEY;
        fetch(url).then(res => res.json()).then(m_data =>{
        const{Plot} = m_data;
        const movieEl = document.createElement('div');
        movieEl.setAttribute('imdb_id',imdbID);
        movieEl.classList.add('movie');
        movieEl.innerHTML = 

        `
        <img src="${Poster}" alt="${Title}" imdb_id="${imdbID}" id="posterImage" onerror="this.onerror=null;this.src='/bingeheads_logo.png';">
        <div imdb_id="${imdbID}" class="movie-info">
            <h3 imdb_id="${imdbID}">${Title}</h3> <span imdb_id="${imdbID}" class="release">${Year}</span> <span imdb_id="${imdbID}" class="type">${Type}</span> 
        </div>
        <div imdb_id="${imdbID}" class="overview">
            <h3 imdb_id="${imdbID}">Overview</h3>
            ${Plot}
        </div>

        `
        main.appendChild(movieEl);
        });

    });
}





document.getElementById("loadMoreButton").addEventListener("click",()=>{
    page=page+1;
    getMovies(BASE_SEARCH+term);
});

document.getElementById("main").addEventListener("click",(e)=>{
    if(e.target.id == 'main');
    else{
    id= e.target.getAttribute('imdb_id');
    url=`movieinfo.php?imdbid=${id}&apikey=${api_key_dig}`;
    window.open(url, "_blank");}
});



document.getElementById('search').addEventListener('keypress',(e)=>{
    if (e.key === "Enter") {
        e.preventDefault();
        search();
    }});

function search(){
    term = document.getElementById('search').value;
    // console.log(typeof(term));
    page=1;
    getMovies(BASE_SEARCH+term);

}

//Logout Button
document.getElementById("logoutButton").addEventListener("click",(e)=>{
    url='logout.php';
    window.open(url,"_self");
});

//Open movie info page such that clicking on main doet not open the movie info page onli clicking poster/overview does
document.getElementById("main").addEventListener("click",(e)=>{
    if(e.target.id == 'main');
    else{
    id= e.target.getAttribute('imdb_id');
    url=`movieinfo.php?imdbid=${id}&apikey=${api_key_dig}`;
    window.open(url, "_blank");
    }
});



//view drop down menu
let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

//toggle Sidebar scroll-in-out Properties

let sidebar = document.getElementById('sidebarid');
sidebar.addEventListener("mouseenter",()=>{
  sidebar.classList.toggle("close");
});

sidebar.addEventListener("mouseleave",()=>{
  sidebar.classList.toggle("close");
});





function getPlaylists(){
    var req = new XMLHttpRequest(); 
    req.onload = function() {
    playlists = JSON.parse((this.responseText)); 
    const pl_list = document.getElementById('sub_menu_id');
    pl_list.innerHTML = "";
    playlists.forEach(element=>{
        const item = document.createElement('li');
        item.innerHTML = `<a id='playlist_button' href="#">${element}</a>`;
        pl_list.appendChild(item);
        console.log("Child Appended");

    });
    setPlaylistButtonevent();
 };
 req.open("get", "getplaylistnumber.php", true); 
 req.send();
}





function setPlaylistButtonevent(){
    item = document.getElementById('sub_menu_id')
        item.addEventListener('click', e => {
          if(  e.target.id =='playlist_button' ){
                fill_with_playlist(e.target.innerHTML);
          }
      });
}

function fill_with_playlist(playlistname){
    main.innerHTML='';
    page=0;
    var req = new XMLHttpRequest(); 
    req.onload = function() {
    movies = JSON.parse((this.responseText)); 
    movies.forEach(imdbID =>{
        url=BASE_SEARCH_MovieInfo+imdbID+API_KEY;
        fetch(url).then(res => res.json()).then(m_data =>{
            const{Plot,Poster,Year,Type,Title} = m_data;
            // console.log(Plot);
            const movieEl = document.createElement('div');
            movieEl.setAttribute('imdb_id',imdbID);
            movieEl.classList.add('movie');
            movieEl.innerHTML = 
        
            `
            <img src="${Poster}" alt="${Title}" imdb_id="${imdbID}" id="posterImage" onerror="this.onerror=null;this.src='/bingeheads_logo.png';">
            <div imdb_id="${imdbID}" class="movie-info">
                <h3 imdb_id="${imdbID}">${Title}</h3> <span imdb_id="${imdbID}" class="release">${Year}</span> <span imdb_id="${imdbID}" class="type">${Type}</span> 
            </div>
            <div imdb_id="${imdbID}" class="overview">
                <h3 imdb_id="${imdbID}">Overview</h3>
                ${Plot}
            </div>
        
            `
            main.appendChild(movieEl);
            });

    })

 };
 req.open("get", `getplaylistcontent.php?mid=${playlistname}`, true);
//  header("Location: getplaylistcontent.php?mid=Movies 1"); 
 req.send();
}



document.getElementById('playlistsubmit').addEventListener("click",(e)=>{
    chk = document.getElementById('chkbxk').checked;
    if(chk){
        chk='1';
    }else{
        chk='0';
    }
    pln = document.getElementById('plname').value;
  
        // console.log(chk+" "+pln);
        if(!(pln=="")){
            createPlaylist(pln,chk);
        }

    
})


function createPlaylist(pln,chk){
    console.log(chk);
        var xhr = new XMLHttpRequest();
        xhr.open("GET", `insert_playlist.php?playlistname=${pln}&public=${chk}`);
        xhr.onload = function () {
            getPlaylists();
        };
        xhr.send();
        return false;
}