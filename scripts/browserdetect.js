function ssEnable(mySheet)
{
    var change = false;
    var oldSheet = 0;
    
    for(i = 0; i < document.styleSheets.length; i++)
    {
        if (document.styleSheets[i].disabled == false)
        {
            oldSheet = i;
            
        }
        document.styleSheets[i].disabled = true;
        if (document.styleSheets[i].title == mySheet)
        {
            document.styleSheets[i].disabled = false;
            change = true;
        }
    }
    if (!change) document.styleSheets[oldSheet].disabled = false;
    return change;
}

function sheet()
{
    var sheetName = prompt("Stylesheet Name?");
    if (!ssEnable(sheetName)) alert("Not Found - original stylesheet retained");
}

function toggle()
{
    var myElement = document.getElementsByTagName("header")[0];
    if (myElement.style.backgroundColor == 'red')
    {
        myElement.style.backgroundColor = 'yellow';
        myElement.style.color = 'black';
        myElement.style.border = '2px solid black';
    } else {
                myElement.style.backgroundColor = 'red';
                myElement.style.color = 'white';
                myElement.style.border = 'none';
           }
}

function getTemp()
{ 
    var fValue = document.getElementById("calcValue").value;
    var cValue;
    
    cValue = ((fValue - 32) * 5) / 9;
    alert(cValue);
    //Deduct 32, then multiply by 5, then divide by 9   
}



function telltime()
{
    var out = "";
    var now = new Date();
    //out += "Date: " + now.getDate();
    //out += "<br />Month: " + now.getMonth();
    //out += "<br />Year: " + now.getFullYear();
    //out += "<br />Hours: " + now.getHours();
    //out += "<br />Minutes: " + now.getMinutes();
    //out += "<br />Seconds: " + now.getSeconds();
    out += "Created: " + now.toDateString() + " " + now.toTimeString();
    document.getElementById("date").innerHTML = out;
}

function calcVolume()
{
    radius = document.getElementById("rValue").value;
    height = document.getElementById("hValue").value;
    
    //calculate value using math object
    volume = Math.ceil(Math.PI * (radius * radius) * height);
    document.getElementById("volume").innerHTML = volume + " cubic metres";
}

function wrangleArray()
{
    var sentence = prompt("What would you like to tell the author of this site?", "You are so cool.");
    var newSentence = "";
    
    //write sentence variable to div1
    document.getElementById("div1").innerHTML = "<p>" + sentence + "</p>";
    
    //read sentence variable into array using each space as a delimiter
    var words = sentence.split(" ");
    
    //remove words 'really' and 'cool' and add 'powerful' instead, alert user to removed words
    var message = words.splice(3, 2, "powerful, ", "awesome");
    alert("The splice method removed the following words: " + message);
    
    //join array elements into string, and write into div2
    document.getElementById("div2").innerHTML = "<p>" + words.join(" ");  
}



