<?php
include 'db.php';
include 'nav.php'; 

$pollsQuery = "SELECT * FROM polls ORDER BY created_at DESC";
$pollsResult = $conn->query($pollsQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Polls</title>
    <link rel="stylesheet" href="../css/community.css">
    <script>
        function vote(pollId) {
            const options = document.querySelectorAll(`input[name='poll_${pollId}']:checked`);
            if (options.length === 0) {
                alert('Please select an option before voting.');
                return;
            }
            const optionIndex = options[0].value;

            fetch('../community/vote_poll.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `poll_id=${pollId}&option_index=${optionIndex}`
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      location.reload(); // Reload page to reflect the vote
                  } else {
                      alert('Error: ' + data.message);
                  }
              });
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>All Polls</h1>

        <div id="polls-list">
            <?php while ($poll = $pollsResult->fetch_assoc()): ?>
                <div class="poll">
                    <h3><?php echo htmlspecialchars($poll['question']); ?></h3>
                    <?php
                    $options = explode(',', $poll['options']);
                    $totalVotesResult = $conn->query("SELECT COUNT(*) as total FROM poll_votes WHERE poll_id = " . $poll['id']);
                    $totalVotes = $totalVotesResult->fetch_assoc()['total'];

                    foreach ($options as $index => $option):
                        $optionVotesResult = $conn->query("SELECT COUNT(*) as count FROM poll_votes WHERE poll_id = " . $poll['id'] . " AND option_index = " . $index);
                        $optionVotes = $optionVotesResult->fetch_assoc()['count'];
                        $percentage = $totalVotes > 0 ? ($optionVotes / $totalVotes) * 100 : 0;
                    ?>
                        <p>
                            <input type="radio" name="poll_<?php echo $poll['id']; ?>" value="<?php echo $index; ?>">
                            <?php echo htmlspecialchars($option); ?> (<?php echo round($percentage); ?>%)
                        </p>
                    <?php endforeach; ?>
                    <button onclick="vote(<?php echo $poll['id']; ?>)">Vote</button>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>
