
// Random colors for backgroundColor
function getRandomColor(id) {
var myarray= new Array("#e55c5c","#cfcfcf","#010053", "#111111", "#292929", "#1854aa", "#878787", "#303030", "#7e002c", "#e5245a", "#6c093e", 
     "#1e1e1e", "#59b8e5", "#f1b01e", '#080808', '#282828', '#484848', '#181818', "#f60404", "#5f5f5f", "#0067f9", "#004551", "#424f79", "#353535", "#999999", "#804D29", "#003F54", "#282E3E",
      "#1F2642", "#E0CC09", "#5DC4ED", "#900E4D");
    var randomColor = myarray[Math.floor(Math.random() * myarray.length)];
 
    document.getElementById(id).style.backgroundColor = randomColor;
    document.getElementById('y').value = randomColor;
} 




   