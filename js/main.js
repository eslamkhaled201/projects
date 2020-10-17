/*function UpIcon(){
  var upicon=$("#Up");
  $(window).scroll(function(){
    if( $(window).scrollTop() >=10){
      $(upicon).fadeIn(500);
    }else{
      $(upicon).fadeOut(500);
    }
  })
  $(upicon).click(function(){
    $(window).scrollTop(0);
  })
}
UpIcon();

/*  // Add items \\

colores.push("eslam");        =>  add from end
colores.unshift("Ibrahim");   =>  add from start
colores.splice(1,0,"mohamed");  =>  add in certain index

   // Remove items \\
colores.pop();   remove srom end
colores.shift(); remove srom start

  // sorting array \\
console.log(colores.sort());
console.log(colores.reverse());


/* // string//

var nAme = " eslam khaleds mohamed ahmed "
var splitedname = nAme.split(),
    upper= nAme.toUpperCase();

console.log(nAme.slice(-1))
console.log(nAme.substr(6,5))
console.log(nAme.substring("a",5))
var replaced =nAme.replace("eslam" , "yosuif")
console.log(splitedname.includes("eslam"))
console.log(nAme.indexOf("eslam" , 6));
console.log(nAme.lastIndexOf("eslam" , 6));
console.log(nAme.search("e"));
console.log(nAme.split(" " , 3));
console.log(nAme.slice(0 , 5)); /// (strat , l7ad kam)
console.log(nAme.substr(6, 6)); /// (start , kam 7arf)
console.log(nAme.substring(12 ,10 )); /// zay al sclice bas by3mal swap llparameters
console.log(nAme.charAt(7).replace("h" , "H"));
console.log(nAme.toUpperCase().substr(0,5));
console.log(nAme.toUpperCase().split(" ",4));
console.log(nAme.toUpperCase().slice(0,-1).trim());
console.log(nAme.toUpperCase().slice(0,-1));
*/
/*  // numbers //
num ="58.35px";
console.log((58.89).toFixed());
console.log((58.89).toFixed(1));

console.log(parseInt(num)) // to get numbers string

var maydate =new Date(),

    localDate=maydate.toLocaleString();
*/


/*
.innerWidth() include the padding and border but not margin
.outerWidth(true) include the padding , border  and margin
.outerWidth() include the padding , border  and no margin
.children() get the direct chlid of element ;
.find ()
.siblings() get all element brothers but not include the elementes ;
.nextAll() 
.prev()
.nextUntil() get all next to the selected element until selected element; 
.first()
.last
$(enemnt).filter(can get object , function); filter all elements that has certain selector;
.not(can get element , object , function)get all other than elements that selected.
$("element:last or :odd  :even") 
$("p:last-child") select all p that are last child in div or section
$("p:last-of-type") select last p in all divs and body
$("p:nth-child(1)") choose the first child paragraph from every parent
$("p:nth-last-child(2)") select the second last paragraph from end of every parant
$("p:nth-of-type(2)") choose the second element of type par from every parent
$("p:only-child") chosose the p that be the only child of his parent
$("p:only-of-type") choose the element that only p of his parent 
$("div > p") select all par that are direct childrens of div
$("div + p") select p that is next to div 
$("div ~ p") select all p those are next to div
$("div p:gt(1)") select all p that has index > 1 in every div
$("div p:gt(3)") select all p that has index < 3 in every div
$("div p:not(:contains('4'))")  select all p that not contains text 5
$(":hidden")  select hidden elements
$(":visible") select visible elements
$("[src]") select the elements that have attr src 
$("p[lang='ar']") select  the par with attr value
$("p[lang=!'ar']") select all other par without lang ar
img[alt*='image'] select all par that has attr alt contains image word
$("button[id~= 'test']") select buttons that his id contains test as single word
$("button[id^= 'test']") select buttons that his id start with test
$("div :input") select the input inside div
 $("div :password") select the input of type password inside div
 $(":disabled") select the input has attr disabled
  $("input:checked") select the checked input
  $(":input").select(function) select executes function when any text is selected from the input 
  $(":selected") choose selected option
  .slice(strat,end) select elements in spesific range
  isDefaultPrevented()
  .change() event ecurs when element value changed from the input //note: this evevnt used for inputs and selectors
  .one('event', function) executes the event one time
$("form:last").submit(); this event excutes when the form is submiting
$("p:only-of-type").clone(true) this clones the element with its events
.detach() remove the element without its events
$("#colorSel").offset()get the distance between left and top of p from the document;
$("#colorSel").position()get the distance between left and top of p from parent ;
.prop()
  $("p").wrap() this function put any p container
  .has() check if this element has selected child 
  .is()
  .end() break the chain of functions and return the selected element to its first state
*/





