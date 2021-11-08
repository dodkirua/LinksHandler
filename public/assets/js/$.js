
class $ {
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
              if (lk.img === null) {
                  img.src = '/assets/img/link/default.jpg';
              }
              else {
                  img.src = lk.img;
              }
              img.alt = (lk.name);
              imgDiv.append(img);
              let divLink = document.createElement('div');
              divLink.classList.add('divLink');
              let a = document.createElement('a');
              line.innerHTML = lk.user + " : " +msg.content;
              area.append(line) ;
          });

      }
      let url = "/Controller/chatRoom-get.php?num=" + chat.value;

      xhr.open("GET",url);
      xhr.send();
  }

}