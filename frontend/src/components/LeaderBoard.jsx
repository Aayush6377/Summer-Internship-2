// src/components/LeaderBoard.jsx
import React, { useEffect, useState } from 'react';

const LeaderBoard = () => {
    const [leaders, setLeaders] = useState([]);

    useEffect(() => {
        // Fetch leaderboard data from API
        fetch('/api/leaderboard')
            .then(response => response.json())
            .then(data => setLeaders(data))
            .catch(error => console.error('Error fetching leaderboard:', error));
    }, []);

    return (
        <div className="leaderboard">
            <h2>Leaderboard</h2>
            <table>
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    {leaders.map((leader, index) => (
                        <tr key={leader.id}>
                            <td>{index + 1}</td>
                            <td>{leader.name}</td>
                            <td>{leader.score}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default LeaderBoard;
