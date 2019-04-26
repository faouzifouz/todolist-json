let ajax_get = (url, callback) => {
    let xmlhttp = new XMLHttpRequest();
    let data;
    xmlhttp.onreadystatechange = () => {
      if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        console.log("response:" + xmlhttp.responseText);
        try {
          data = JSON.parse(xmlhttp.responseText);
        } catch (err) {
          console.log(err.message + xmlhttp.responseText);
          return;
        }
        callback(data);
      }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
  };
  
  ajax_get("todo.json", data => {
       document.getElementById("task").innerHTML = data["tache"];
    console.log(data);
    //   let html = "<h2>" + data["name"] + "</h2>";
    let html = "<ul>";
    let task = "<ul>";
    for (let i = 0; i < data.length; i++) {
      
      if (data[i]["bool"] === false) {
        html += "<li><input type='checkbox' name='check[]' value='"+ data[i]["tache"] +"'>" + data[i]["tache"] + "</li>";
      } else {
        task += "<li><input name='test[]' value='" + data[i]["tache"] +"' type='checkbox'>" + data[i]["tache"] + "</li>";
      }
    }
    html += "</ul>";
    task += "</ul>";
    document.getElementById("task").innerHTML = task;
    document.getElementById("archive").innerHTML = html;
    
    
    
});
  