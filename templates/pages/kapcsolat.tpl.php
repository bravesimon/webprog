<h2>Kuldjon nekunk uzenetet:</h2>
<p>Titkarno: <strong>Kiss Marika</strong></p>
<p>E-mail: <a href="mailto:bejelentkezes@szerviz.hu">bejelentkezes@szerviz.hu</a> </p>

<h3>Vagy kuldjon uzenetet weboldalunkon keresztul:</h3>

<form name="kapcsolat" action="kapcsolat.php" onsubmit="return ellenoriz();" method="post">
    <div>
        <label><input type="text" id="email" name="email" size="30" maxlength="40">E-mail (kötelező)</label>
        <br/>
        <label> <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea>Üzenet (kötelező)</label>
        <br/>
        <input id="kuld" type="submit" value="Küldes">
    </div>
</form>
