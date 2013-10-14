function calcage7(secs, num1, num2) {
  s = ((Math.floor(secs/num1))%num2).toString();
  if (LeadingZero && s.length < 2)
    s = "0" + s;
  return "<b>" + s + "</b>";
}

function CountBack7(secs) {
  if (secs < 0) {
    document.getElementById("cntdwn7").innerHTML = FinishMessage;
    return;
  }
  DisplayStr7 = DisplayFormat.replace(/%%D%%/g, calcage7(secs,86400,100000));
  DisplayStr7 = DisplayStr7.replace(/%%H%%/g, calcage7(secs,3600,24));
  DisplayStr7 = DisplayStr7.replace(/%%M%%/g, calcage7(secs,60,60));
  DisplayStr7 = DisplayStr7.replace(/%%S%%/g, calcage7(secs,1,60));

  document.getElementById("cntdwn7").innerHTML = DisplayStr7;
  if (CountActive)
    setTimeout("CountBack7(" + (secs+CountStepper) + ")", SetTimeOutPeriod);
}

function putspan(backcolor, forecolor) {
 document.write("<span id='cntdwn7' style='background-color:" + backcolor + 
                "; color:" + forecolor + "'></span>");
}

if (typeof(BackColor)=="undefined")
  BackColor = "white";
if (typeof(ForeColor)=="undefined")
  ForeColor= "black";
if (typeof(TargetDate)=="undefined")
  TargetDate = "12/31/2020 5:00 AM";
if (typeof(DisplayFormat)=="undefined")
  DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
if (typeof(CountActive)=="undefined")
  CountActive = true;
if (typeof(FinishMessage)=="undefined")
  FinishMessage = "";
if (typeof(CountStepper)!="number")
  CountStepper = -1;
if (typeof(LeadingZero)=="undefined")
  LeadingZero = true;


CountStepper = Math.ceil(CountStepper);
if (CountStepper == 0)
  CountActive = false;
var SetTimeOutPeriod = (Math.abs(CountStepper)-1)*1000 + 990;
putspan(BackColor, ForeColor);
var dthen = new Date(TargetDate);
var dnow = new Date();
if(CountStepper>0)
  ddiff = new Date(dnow-dthen);
else
  ddiff = new Date(dthen-dnow);
gsecs = Math.floor(ddiff.valueOf()/1000);
CountBack7(gsecs);