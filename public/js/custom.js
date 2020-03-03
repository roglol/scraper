class News {
    constructor(api,newsContainer,paginationContainer) {
      this.api=api;
      this.newsContainer = newsContainer;
      this.paginationContainer = paginationContainer;
      this.firstIndex = 0;
      this.pageNumber = 1;
      this.recordsPerPage = 6;
      this.pagInit = false;
      this.previous;
      this.next;
      this.pageItems;
    }
    init = () =>{
          this.fetchNews(this.pageNumber,this.recordsPerPage)
    }
    appendNews = (index,link,image,title) =>{
        if(index===0){
            this.newsContainer.innerHTML = '';
        }
        this.newsContainer.innerHTML += 
        `<div class="media col-md-6" style="width:49%;">
            <div class="media-left">
                <a href=${link}> 
                <img class="media-object" src=${image} width="150" alt="..."/> 
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading"><a href=${link}>
                ${title}
                </a></h4>
                <ul class="post-tools">
                  <li> by <a href="#"><strong> Canyon</strong> </a></li>
                  <li>  5 Hours Ago </li>
                  <li><a href="#"> <i class="ti-thought"></i> 57</a> </li>
                </ul>
            </div>
        </div>
       `
    }
    nextAction = () =>{
        this.next.addEventListener('click', (e) =>{
            if(this.firstIndex >= this.pageItems.length-2){
                return
            }
            this.pageItems.forEach((el,i,arr) =>{
                if(this.firstIndex < i && i <= this.firstIndex + 3){
                    el.style.display = 'inline-block'
                }else{
                    el.style.display = 'none';
                }
                if(i ===arr.length-1){
                    this.firstIndex =this.firstIndex + 3;
                }
            })
        })
    }
    prevAction = () =>{
        this.previous.addEventListener('click', (e) =>{
            if(this.firstIndex <= 2){
                return
            }
            this.pageItems.forEach((el,i,arr) =>{
                if((this.firstIndex - 6) < i && i <= this.firstIndex-3){
                    el.style.display = 'inline-block'
                }else{
                    el.style.display = 'none';
                }
                if(i ===arr.length-1){
                    this.firstIndex =this.firstIndex - 3;
                }
            })
        })
    }
    pageItemAction = () =>{
        this.pageItems.forEach((el,i,arr) =>{
            el.addEventListener('click',(e)=>{
                this.pageNumber = e.target.innerHTML
                this.fetchNews(this.pageNumber,this.recordsPerPage)
            })
            if(i <= 2){
                el.style.display = 'inline-block';
            }
            if(i ===arr.length-1){
                this.firstIndex = 2;
            }
        })
    }
    paginationAction = (response) =>{
        for(let i=0; i<response;i++){
            if(i==0){
              this.paginationContainer.innerHTML +=
              ` <li class="page-item">
              <a class="page-link" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
              `
            }

          this.paginationContainer.innerHTML +=
              `<li class="page-item page-link-button">
              <a class="page-link" href="javascript:void(0)">${i+1}</a>
              </li>
              `
              if(i==response-1){
                  this.paginationContainer.innerHTML +=
                  `<li class="page-item">
                  <a class="page-link" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>`
              }
        }
    }
    fetchNews = (pageNumber,recordsPerPage) =>{
        var data = new FormData();
        data.append('page', `${pageNumber}`);
        data.append('records', `${recordsPerPage}`);
            var xhttp = new XMLHttpRequest();
            var that = this;
            xhttp.onreadystatechange =function(){
                if (this.readyState == 4 && this.status == 200) {
                    JSON.parse(this.response).records.forEach((el,index) =>{
                        that.appendNews(index,el['link'],el['image'],el['title'])
                  })
                if(!that.pagInit){
                that.paginationAction(JSON.parse(this.response).count)
                that.previous = that.paginationContainer.querySelector(`[aria-label="Previous"]`);
                that.next = that.paginationContainer.querySelector(`[aria-label="Next"]`);
                that.pageItems = that.paginationContainer.querySelectorAll(`.page-link-button`);
                that.pageItemAction()
                that.prevAction()
                that.nextAction()
            }
            that.pagInit = true;
                }
              };
              xhttp.open("POST", that.api, true);
              xhttp.send(data);
        }
  }

  const bbcNews = new News(
      "http://127.0.0.1:8000/api/website/bbc",
      document.querySelector('.bbcContainer'),
      document.querySelector('.bbcPagination')
      )
  bbcNews.init()
  const tabulaNews = new News(
    "http://127.0.0.1:8000/api/website/tabula",
    document.querySelector('.tabulaContainer'),
    document.querySelector('.tabulaPagination')
    )
tabulaNews.init()
