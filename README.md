<h1>Border Correcting</h1>
<hr>
<h3><u>For use: - </u></h3>
<ul>
    <li>Clone the repository to your local machine.</li>
    <li>Open the <code>index.html</code> on your browser.</li>
    <li>Open Visual Studio Code and create new script file like <code>"script.js"</code></li>
    <li>
        <p>If you given this input to the website.</p>
        <pre>
            +-------+------+------+----------+--------+----------+
            |empno |name |desg |dept   |gender |salary   |
            +-------+------+------+-----------+--------+----------+
            | 1 | abc| HR | Marketing  | F | 25000.00 |
            | 2 | nhal | HR | Production  | M |  5000.00 |
            | 3 | Anu | HR | Sales | F | 30000.00 |
            | 4 | ABhi | HR | Marketing  | M | 35000.00 |
            | 5 | Arun | HR | Advertising | M | 25000.00 |
            +-------+------+------+-----------+--------+---------+
        </pre>
    </li>
    <li>
        <p>The website will give you this output, when you are pasting the input.</p>
        <pre>
            +-------+------+------+-------------+--------+----------+
            | empno | name | desg | dept        | gender | salary   |
            +-------+------+------+-------------+--------+----------+
            |     1 | abc  | HR   | Marketing   | F      | 25000.00 |
            |     2 | nhal | HR   | Production  | M      |  5000.00 |
            |     3 | Anu  | HR   | Sales       | F      | 30000.00 |
            |     4 | ABhi | HR   | Marketing   | M      | 35000.00 |
            |     5 | Arun | HR   | Advertising | M      | 25000.00 |
            +-------+------+------+-------------+--------+----------+
        </pre>
    </li>
    <li>After, paste the output to Visual Studio Code Text editor.</li>
    <li>Then copy and paste it into the word</li>
</ul>
<div>
    <h2>Note:-</h2>
    <p>This will only work in <code>consolas</code> font</p>
</div>
<div>
  <h3>More Information</h3>
  <p>we have included the <code>settings.json</code> and <code>script.json</code> in the border repository.</p>
  <div>
    <h5>settings.json</h5>
    <p>It include the table example table of <code>database_table</code> and the font used in the web page <code>Times New Roman</code></p>
  </div>
  <div>
    <h5>script.json</h5>
    <p>It include the working of <code>Index.html's</code> script. The script converted in the form of <code>JSON</code> and stored in the file to easily understand for a human.</p>
  </div>
</div>