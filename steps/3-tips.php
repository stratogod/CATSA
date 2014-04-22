<?
session_start();
?>
</script>
<? include("../inc/db.php"); ?>
<? include("../inc/top.php"); ?>

<html>
<head>
<title>Tips and Tricks</title>
<link rel="stylesheet" type="text/css" href="/css/style-popup.css" />
</head>
<body>
<div style="padding: 7px; padding-right: 14px; font-family: Arial; font-size: 12px;">
<h1>Personal Statements</h1>
<h2>Tips and Tricks</h2>

<br />

<b>Do</b>
<br />
<ul>
<li>Answer 3 questions-why you chose medicine, why the particular specialty, and how you will be an asset to your specialty</li>
<li>Compose a strong introduction/conclusion</li>
<li>Supporting paragraphs should focus on strengths, qualifications, fit to program, long term goals</li>
<li>Make it memorable for the right reasons</li>
<li>Start early, give yourself ample time to write, review and edit </li>
<li>Ask for help in composing it </li>
<li>Carefully check for errors, grammar, spelling </li>
<li>Ask someone to review for content and grammatical accuracy </li>
<li>Read it out loud – this helps with your fine tuning </li>
<li>Keep it to 250-500 words/1 page/ 11 or 12 font</li>
</ul>
<br /><br />

<b>Don't</b><br />
<ul>
<li>Submit it without having someone review it.</li>
<li>Wait until the last minute</li>
<li>Use abbreviations or acronyms without spelling them out </li>
<li>Be redundant – state your point and move on </li>
<li>Write a 5 page personal statement </li>
<li>Be afraid to ask for help </li>
</ul>
<br /><br />


<b>People who are available to look at your Personal Statement:</b><br />
<ul>
<li><a href="mailto:martinat@health.missouri.edu">Alison Martin</a></li>
<li><a href="mailto:rachowj@health.missouri.edu">Jen Rachow</a></li>
<li><a href="mailto:dotyJ@health.missouri.edu">Jen Doty</a></li>
<li><a href="mailto:<? echo $adviserEmail; ?>">Your Adviser</a> <span style="font-size: 11px;">(<? echo $adviserFirstName; ?> <? echo $adviserLastName; ?>)</span></li>
</ul>






<br />


</div>
</body>
</html>