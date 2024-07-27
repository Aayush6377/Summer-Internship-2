import React, { useState } from 'react';
import './InteractiveTools.css';

const InteractiveTools = () => {
  const [height, setHeight] = useState('');
  const [weight, setWeight] = useState('');
  const [bmi, setBMI] = useState(null);
  const [category, setCategory] = useState('');
  const [diet, setDiet] = useState('');

  const calculateBMI = () => {
    const heightInMeters = height / 100;
    const bmiValue = weight / (heightInMeters * heightInMeters);
    setBMI(bmiValue.toFixed(2));
    if (bmiValue < 18.5) {
      setCategory('Underweight');
      setDiet('You should include more calories in your diet. Consider consulting a nutritionist.');
    } else if (bmiValue >= 18.5 && bmiValue < 24.9) {
      setCategory('Normal weight');
      setDiet('Maintain your healthy diet and stay active.');
    } else if (bmiValue >= 25 && bmiValue < 29.9) {
      setCategory('Overweight');
      setDiet('You should consider a balanced diet with controlled portions. Regular exercise is recommended.');
    } else {
      setCategory('Obesity');
      setDiet('Consult a healthcare provider for a personalized diet and exercise plan.');
    }
  };

  return (
    <div className="interactive-tools-background">
      <div className="interactive-tools-container">
        <div className="bmi-calculator">
          <h2 className="bmi-calculator-header">BMI CALCULATOR</h2>
          <input
            type="number"
            placeholder="Height (cm)"
            value={height}
            onChange={(e) => setHeight(e.target.value)}
            className="bmi-calculator-input"
          />
          <input
            type="number"
            placeholder="Weight (kg)"
            value={weight}
            onChange={(e) => setWeight(e.target.value)}
            className="bmi-calculator-input"
          />
          <button onClick={calculateBMI} className="bmi-calculator-button">CALCULATE</button>
          {bmi && (
            <div className="bmi-result">
              <p>Your BMI: {bmi}</p>
              <p>Category: {category}</p>
              <div className="diet-suggestion">
                <h3>Diet Suggestion</h3>
                <p>{diet}</p>
              </div>
            </div>
          )}
        </div>
        <div className="bmi-ranges">
          <h3>BMI Ranges</h3>
          <ul>
            <li>Underweight: &lt; 18.5</li>
            <li>Normal weight: 18.5 - 24.9</li>
            <li>Overweight: 25 - 29.9</li>
            <li>Obesity: 30 and above</li>
          </ul>
        </div>
      </div>
    </div>
  );
};


  





export default InteractiveTools;
