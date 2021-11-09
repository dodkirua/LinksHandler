
class $ {
    /**
     * receive ajax data for the link
     */
  getLink(){
      const xhr = new XMLHttpRequest();
      const display = document.querySelector('#display');
      xhr.onload = function () {
          let contenu = JSON.parse(xhr.responseText);
          contenu.forEach(lk => {
              let link = document.createElement('div');
              link.className.add('link');
              let imgDiv = document.createElement('div');
              imgDiv.className.add('linkImg');
              let img = document.createElement('img');

              if (lk.img === null || lk.img === undefined) {
                  img.src = '/assets/img/link/default.jpg';
              }
              else {
                  img.src = lk.img;
              }
              img.alt = (lk.name);
              imgDiv.append(img);
              link.append(imgDiv);
              let divLink = document.createElement('div');
              divLink.classList.add('divLink');
              let a = document.createElement('a');
              a.href = lk.href;
              a.title = lk.title;
              a.target = lk.target;
              a.innerHTML = lk.name;
              divLink.append(a);
              link.append(divLink);
              display.append(link);
          });

      }
      let url = "../../../Controller/ajax/link-get.php?";

      xhr.open("GET",url);
      xhr.send();
  }

    /**
     * send link data with ajax
     */
    sendLink() {
        const href = document.querySelector('#href');
        const title = document.querySelector('#title');
        const target = document.querySelector('#target');
        const name = document.querySelector('#name');
        const xhrSend = new XMLHttpRequest();
        xhrSend.onload = function() {
            location.reload();
        };
        let link = {
            href : href.value,
            title : title.value,
            target : target.value,
            name : name.value
        }

        xhrSend.open("POST", "../../../Controller/link-send.php");
        xhrSend.send(JSON.stringify(link));
    }
}