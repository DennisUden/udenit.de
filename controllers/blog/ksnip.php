<?php include HEAD_PATH; ?>
<?php include NAV_PATH; ?>

<div id="container">
        <div id="main">
                <div class="blocktext">
                        <h1 class="centered">Einfache Screenshots in Linux</h1>                 

                        <h2>Pfeilschnelle Bildaufnahmen und Annotierungen mithilfe von Ksnip</h2>            
                        <p>Seit meinem Umstieg von Windows 10 auf Linux, war ich auf der Suche nach einer Alternative für Snipping Tool. Die in diversen Distributionen bzw. Desktop-Umgebungen eingebauteten Programme waren nie auch nur annähernd zufriedenstellend. Die Problematik verkomplizierte sich durch den Einsatz von DWM, einer minimalistischen, dynamisch-kachelnden Fensterverwaltung, anstelle einer umfangreichen und vorkonfigurierten Desktop-Umgebung, wie z.B. Gnome oder KDE.</p>
                        <p>Jetzt endlich habe ich eine einfach einzurichtende, leicht zu benutzende und vor allem pfeilschnelle Lösung gefunden. Das Program Ksnip bring alles mit, was ich an Snipping Tool schätze und kann zusätzlich durch die Kommandozeile gesteuert werden, was für das Binden an Tastenkürzel wichtig ist. Mit dem Befehl <pre><code>ksnip --rectarea</code></pre> wird Ksnip in der freien rechteckigen Auswahl und direkt im Anschluss in der Bildbearbeitung gestartet.</p>
                        <h3>Wie kann Ksnip installiert und benutzt werden?</h3>
                        <p>Es gibt auf <a href="https://github.com/ksnip/ksnip">github</a> Installationsanleitungen. In meinem Fall auf Debian war es <pre><code>sudo apt install ksnip</code></pre>Mein gewünschtes Tastaturkürzel habe ich mithilfe von sxhkd eingerichtet, indem ich die Zeilen<pre><code># Screenshot<br>super + s<br>       ksnip --rectarea</code></pre> in meine sxhkdrc eingefügt habe. Anleitungen zu sxhkd finden sich auf <a href="https://github.com/baskerville/sxhkd">github</a>. Im Anschluss neu anmelden, damit die Konfigurationen geladen werden. Ab sofort kann mit <pre><code>super + s</code></pre> eine Bildaufnahme getätigt und im Anschluss direkt bearbeitet werden. Dieser Schritt unterscheidet sich von Aufbau zu Aufbau. In dem meisten Linux-Distributionen gibt es eine eingebaute Funktion zum Definieren von Tastaturkürzeln. Hier kann dieser Befehl ebenfalls hinterlegt werden.</p>                              
			<p>Meine sxhkd Konfiguration kann auf <a href="https://github.com/DennisUden/sxhkd/blob/main/sxhkdrc">github</a> eingesehen werden.</p>
			<p><?php echo "Veröffentlicht am ".$published." von ".$author; ?></p>
                </div>
        </div>
</div>

<?php include FOOTER_PATH; ?>
