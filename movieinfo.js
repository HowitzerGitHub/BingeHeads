
var url = window.location.href;
// var name = <?php echo $_SESSION['user_name']; ?>;
let params = (new URL(url)).searchParams;
const id = params.get('imdbid') // "n1"
const key = params.getAll('apikey') // ["n1", "n2"]
var imd="";
// http://www.omdbapi.com/?i=tt3896198&apikey=9c92906e


const url_mov = 'http://www.omdbapi.com/?i='+id+'&apikey='+key;


fetch(url_mov).then(res => res.json()).then(m_data =>{
    const{Actors,Awards,BoxOffice,Country,imdbID,Director,Genre,Language,Metascore,Plot,Poster,Rated,Ratings,Released,Runtime,Title,Type,imdbRating,Writer,imdbVotes}= m_data;
    const containerInfo = document.getElementById('containerInfo');
    imd=imdbID;
    containerInfo.innerHTML = 

`
        <div class="posterSide">
            <img src="${Poster}" alt="" srcset="">
        </div>
        <div class="infor">
            <div class="navbar">
                <nav class="navbar navbar-light bg-dark">
                    <a class="navbar-brand" href="#" id="username" >Charchit Rajput</a>
                    <img src="image/bingeheads_logo.png" alt="" height="30px">


                  </nav>
            </div>
            <div class="movie-title">
                <span>${Title}</span>
            </div>
            <div class="movie-detail">
                <div class="set">
                    <label>Release Date</label>
                    <span>${Released}</span>
                </div>
                <div class="set">
                    <label>Rated</label>
                    <span>${Rated}</span>
                </div>
                <div class="set">
                    <label for="">Running Time</label>
                    <span>${Runtime}</span>
                </div>
                <div class="set">
                    <label for="">Genre</label>
                    <span>${Genre}</span>
                </div>
                <div class="set">
                    <label for="">Directior</label>
                    <span>${Director}</span>
                </div>
                <div class="set">
                    <label for="">Actors</label>
                    <span>${Actors}</span>
                </div>
                <div class="set">
                    <label for="">Country</label>
                    <span>${Country}</span>
                </div>
                <div class="set">
                    <label for="">Box-Office</label>
                    <span>${BoxOffice}</span>
                </div>
                <div class="set">
                    <label for="">Type</label>
                    <span>${Type}</span>
                </div>
                <div class="set">
                    <label for="">Language</label>
                    <span>${Language}</span>
                </div>
                <div class="set">
                    <label for="">Awards</label>
                    <span>${Awards}</span>
                </div>
                <div class="set">
                    <label for="">IMDb Ratings</label>
                    <span>${imdbRating} on Votes : ${imdbVotes}</span>
                </div>                
            </div>
            <div class="movie-description">
                ${Plot}
            </div>  

            <div class="menu">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Add To Playlist
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownplaylists">
                      <!--<a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>--!>
                    </div>
                  </div>
                  <button type="button" onclick="location.href='https://www.imdb.com/title/${imdbID}/'" class="btn btn-secondary">Open IMDb</button>
            </div>

        </div>
        <div class="logout">
            <button onclick="location.href='logout.php'" type="button" class="btn btn-secondary" id="logout">Logout  <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
        </div>

`
    document.getElementById("logout").addEventListener("click",(e)=>{
    url='logout.php';
    window.open(url,"_self");
    })
    document.body.style.backgroundImage = `url(${Poster})`;
    document.title=Title;
    getPlaylists();
    });

    
    function getPlaylists(){
        var req = new XMLHttpRequest(); 
        req.onload = function() {
        playlists = JSON.parse((this.responseText)); 
        const pl_list = document.getElementById('dropdownplaylists');
        pl_list.innerHTML = "";
        playlists.forEach(element=>{
            const item = document.createElement('a');
            item.setAttribute("class","dropdown-item");
            //<a class="dropdown-item" href="#">Another action</a>
            item.innerHTML = element;
            pl_list.appendChild(item);
    
        });
        settitle();
        setPlaylistButtonevent();
     };
     req.open("get", "getplaylistnumber.php", true); 
     req.send();
    }


function settitle(){
    var req = new XMLHttpRequest(); 
    req.onload = function() {
    user_name = (this.responseText); 
    document.getElementById('username').innerHTML=user_name;
 };
 req.open("get", `return_session_name.php`, true); 
 req.send();

}

function setPlaylistButtonevent(){
    document.getElementById('dropdownplaylists').addEventListener("click",(e)=>{
        plylst = e.target.innerHTML;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", `insert_playlist_content.php?playlistname=${plylst}&imdbid=${imd}`);
        xhr.onload = function () {
        //   console.log(this.response);
        };
        xhr.send();
        return false;
        
    })
}