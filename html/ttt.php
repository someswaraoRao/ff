

<style>

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.section {
  margin-bottom: 20px;
}

.section h2 {
  color: #333;
  font-size: 24px;
  margin-bottom: 10px;
}

.table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

.table th, .table td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: left;
}

.table th {
  background-color: #f0f0f0;
}

.prize {
  background-color: #ffc107;
  color: #333;
  padding: 5px 10px;
  border-radius: 4px;
  font-weight: bold;
}

.time {
  background-color: #007bff;
  color: #fff;
  padding: 5px 10px;
  border-radius: 4px;
}

.match {
  font-weight: bold;
}

.prize-details {
  font-size: 14px;
  margin-top: 5px;
}

/* Colors */
.qualifiers {
  background-color: #28a745;
}

.semifinals {
  background-color: #dc3545;
}

.finals {
  background-color: #007bff;
}
</style>

<div class="container">
  <div class="section">
    <h2>Qualifiers</h2>
    <table class="table">
      <tr>
        <th>Time</th>
        <th>Match</th>
      </tr>
      <tr>
        <td class="time">10:00 AM</td>
        <td class="match">1st BR match</td>
      </tr>
      <tr>
        <td class="time">11:00 AM</td>
        <td class="match">2nd BR match</td>
      </tr>
      <tr>
        <td class="time">12:00 PM</td>
        <td class="match">3rd BR match</td>
      </tr>
      <tr>
        <td class="time">1:00 PM</td>
        <td class="match">4th BR match</td>
      </tr>
    </table>
  </div>

  <div class="section">
    <h2>Semifinals</h2>
    <table class="table">
      <tr>
        <th>Time</th>
        <th>Match</th>
      </tr>
      <tr>
        <td class="time">2:30 PM</td>
        <td class="match semifinals">1st CS match</td>
      </tr>
      <tr>
        <td class="time">2:30 PM</td>
        <td class="match semifinals">2nd CS match</td>
      </tr>
    </table>
  </div>

  <div class="section">
    <h2>Finals</h2>
    <table class="table">
      <tr>
        <th>Time</th>
        <th>Match</th>
      </tr>
      <tr>
        <td class="time">3:30 PM</td>
        <td class="match finals">3rd CS match</td>
      </tr>
    </table>
  </div>

  <div class="section">
    <h2>Prizes</h2>
    <div class="prize-details">
      <span class="prize qualifiers">Winners:</span> 1000 RS cash prize and a memento<br>
      <span class="prize qualifiers">Runners:</span> 4 weekly memberships<br>
      <span class="prize">80 RS redeem code for the player with highest kills in each BR match</span>
    </div>
  </div>
</div>
