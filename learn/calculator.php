<HTML>

<HEAD>

<TITLE></TITLE>

</HEAD>



<SCRIPT LANGUAGE="JavaScript">

<!--

function checkForZero(field)

{

    if (field.value == 0 || field.value.length == 0) {

        alert ("This field can't be 0!");

        field.focus(); }

    else

        calculatePayment(field.form);

}



function cmdCalc_Click(form)

{

    if (form.price.value == 0 || form.price.value.length == 0) {

        alert ("The Price field can't be 0!");

        form.price.focus(); }

    else if (form.ir.value == 0 || form.ir.value.length == 0) {

        alert ("The Interest Rate field can't be 0!");

        form.ir.focus(); }

    else if (form.term.value == 0 || form.term.value.length == 0) {

        alert ("The Term field can't be 0!");

        form.term.focus(); }

    else

        calculatePayment(form);

}



function calculatePayment(form)

{

    princ = form.price.value - form.dp.value;

    intRate = (form.ir.value/100) / 12;

    months = form.term.value * 12;

    form.pmt.value = Math.floor((princ*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

    inf= (form.ir.value)/100;
 
    sale=(form.term.value)/100;

    total=form.price.value * sale * form.dp.value * 0.3 * inf;

    form.principle.value = total;

    form.payments.value = months;

}

//-->

</SCRIPT>



<BODY>

<TABLE>

<TR>

<TD VALIGN=TOP>



<FORM NAME="MortgageMinder">



<TABLE WIDTH=350 BORDER=2 BGCOLOR=#A7E8FC CELLPADDING=2>

<TR>

<TD COLSPAN=2 ALIGN=CENTER>

<B><FONT SIZE=+2 COLOR=BLUE><FONT SIZE=+1> <FONT SIZE=+1>Do The Math<FONT SIZE=+1></FONT></B>

</TD>

</TR>



<TR>

<TD COLSPAN=2 WIDTH=50%> 

<TABLE BORDER=0 CELLPADDING=2>



<TR>

<TD COLSPAN=2><B>Calculate the benefits of influence:</B></TD>



<TR>

<TD ALIGN=RIGHT>number of units sold:</TD>

<TD>

<INPUT 

    TYPE=TEXT

    NAME=price

    VALUE="100" 

    SIZE=7

    onBlur=checkForZero(this)

    onChange=checkForZero(this)>

</TD>

</TR>



<TR>

<TD ALIGN=RIGHT>average price per unit ($):</TD>

<TD>

 <INPUT 

    TYPE=TEXT 

    NAME=dp

    VALUE=10 

    onChange=calculatePayment(this.form) 

    SIZE=7>

</TD>

</TR>



<TR>

<TD ALIGN=RIGHT>your overall influence (%):</TD>

<TD>

<INPUT 

    TYPE=TEXT

    NAME=ir

    VALUE="10" 

    SIZE=4

    onBlur=checkForZero(this)

    onChange=checkForZero(this)>



</TD>

</TR>



<TR>

<TD ALIGN=RIGHT>% of units sold:</TD>

<TD>



<INPUT 

    TYPE=TEXT

    NAME=term

    VALUE="10" 

    SIZE=4

    onBlur=checkForZero(this)

    onChange=checkForZero(this)>



</TD>

</TR>



</TABLE>

</TD></TR>



<TR>

<TD>



<TABLE BORDER=0 CELLPADDING=2>



<TR>

<TD COLSPAN=2><B>Results:</B></TD>

<TR>

<TD ALIGN=RIGHT>Your Earnings($):</TD>

<TD>



<INPUT 

    TYPE=TEXT

    NAME=principle

    SIZE=7>



</TD>




<TR>

<TD ALIGN=RIGHT></TD>

<TD>

<INPUT 

    TYPE=HIDDEN

    NAME=pmt

    SIZE=7>

</TD>

</TR>

</TABLE>

</TD>

</TR>



<TR>

<TD ALIGN=CENTER COLSPAN=2>

<INPUT 

    TYPE=BUTTON

    NAME="cmdCalc" 

    VALUE="Calculate"

    onClick=cmdCalc_Click(this.form) class="btnstyle">





</TD>

</TR>

</TD></TR>

</TABLE>



</FORM></TD>





</TABLE>


<!--
Here's the JavaScript:

<PRE>

&lt;SCRIPT LANGUAGE="JavaScript"&gt;

&lt;!--

    function checkForZero(field) {

        if (field.value == 0 || field.value.length == 0) {

            alert ("This field can't be 0!");

            field.focus(); }

        else

	    calculatePayment(field.form);

    }



    function cmdCalc_Click(form) {

        if (form.price.value == 0 || form.price.value.length == 0) {

            alert ("The Price field can't be 0!");

            form.price.focus(); }

        else if (form.ir.value == 0 || form.ir.value.length == 0) {

            alert ("The Interest Rate field can't be 0!");

            form.ir.focus(); }

        else if (form.term.value == 0 || form.term.value.length == 0) {

            alert ("The Term field can't be 0!");

            form.term.focus(); }

        else

            calculatePayment(form);

    }



    function calculatePayment(form) {

        princ = form.price.value - form.dp.value;

        intRate = (form.ir.value/100) / 12;

        months = form.term.value * 12;

        form.pmt.value = Math.floor((princ*intRate)/(1-Math.pow(1+intRate,(-1*months)))*100)/100;

  	form.principle.value = princ;

	form.payments.value = months;

    }

//--&gt;

&lt;/SCRIPT&gt;

</PRE>

-->

</BODY>

</HTML>
