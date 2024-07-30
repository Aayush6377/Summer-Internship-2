import React, { useState } from 'react';
import DatePicker from 'react-datepicker';
import 'react-datepicker/dist/react-datepicker.css';
import './AppointmentBooking.css';

const PersonalHealthManagement = () => {
  const [showBooking, setShowBooking] = useState(false);
  const [selectedService, setSelectedService] = useState(null);

  const services = [
    { title: 'Initial Assessment', duration: '1 hr', price: '$75', imgSrc: 'https://plus.unsplash.com/premium_photo-1661777196224-bfda51e61cfd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8eW9nYXxlbnwwfHwwfHx8MA%3D%3D' },
    { title: 'Personal Counseling', duration: '1 hr', price: '$75', imgSrc: 'https://plus.unsplash.com/premium_photo-1676408941292-c34f05151747?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' },
    { title: 'Lifestyle Workshop', duration: '1 hr', price: '$75', imgSrc: 'https://blog.myfitnesspal.com/wp-content/uploads/2022/05/Eating-For-Impact-6-Ways-to-Eat-for-Focus-2.jpg.webp' },
    { title: 'Lifestyle Workshop', duration: '1 hr', price: '$75', imgSrc: 'https://blog.myfitnesspal.com/wp-content/uploads/2018/01/UACF_EG_Hero_NoBadge_Portion-Control.jpg.webp' },
    { title: 'Lifestyle Workshop', duration: '1 hr', price: '$75', imgSrc: 'https://blog.myfitnesspal.com/wp-content/uploads/2022/02/5-Things-I-Learned-Working-With-Elite-Athletes.jpg.webp' },
    { title: 'Lifestyle Workshop', duration: '1 hr', price: '$75', imgSrc: 'https://blog.myfitnesspal.com/wp-content/uploads/2024/05/gut-health-weight-loss.jpg' },
    { title: 'Lifestyle Workshop', duration: '1 hr', price: '$75', imgSrc: 'https://images.unsplash.com/photo-1430163393927-3dab9af7ea38?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' },
    { title: 'Lifestyle Workshop', duration: '1 hr', price: '$75', imgSrc: 'https://static.wixstatic.com/media/2a1a02_45bbbb204c1c42d5b2997c88312047f9~mv2.jpeg/v1/fill/w_400,h_300,fp_0.50_0.50,q_90,enc_auto/2a1a02_45bbbb204c1c42d5b2997c88312047f9~mv2.jpeg' },
  ];

  const handleBookNow = (service) => {
    setSelectedService(service);
    setShowBooking(true);
  };

  const handleBack = () => {
    setShowBooking(false);
    setSelectedService(null);
  };

  return (
    <div className="personal-health-management">
      {showBooking ? (
        <div className="appointment-booking">
          <h1>{selectedService.title}</h1>
          <p>Check out our availability and book the date and time that works for you</p>
          <button onClick={handleBack}>Back</button>
          <AppointmentBooking selectedService={selectedService} />
        </div>
      ) : (
        <div className="service-cards">
          {services.map((service, index) => (
            <div className="service-card" key={index}>
              <img src={service.imgSrc} alt={service.title} />
              <h2>{service.title}</h2>
              <p>{service.duration}</p>
              <p>{service.price}</p>
              <button onClick={() => handleBookNow(service)}>Book Now</button>
            </div>
          ))}
        </div>
      )}
    </div>
  );
};

const AppointmentBooking = ({ selectedService }) => {
  const [selectedDate, setSelectedDate] = useState(new Date());
  const [selectedTime, setSelectedTime] = useState(null);

  const times = [
    '10:00 am', '10:30 am', '11:00 am', '11:30 am', 
    '12:00 pm', '12:30 pm', '1:00 pm', '1:30 pm', 
    '2:00 pm', '2:30 pm'
  ];

  const handleDateChange = (date) => {
    setSelectedDate(date);
  };

  const handleTimeChange = (time) => {
    setSelectedTime(time);
  };

  return (
    <div className="appointment-booking">
      <div className="booking-section">
        <div className="date-time-selector">
          <h2>Select a Date and Time</h2>
          <DatePicker
            selected={selectedDate}
            onChange={handleDateChange}
            inline
          />
          <div className="time-selector">
            <h3>{selectedDate.toDateString()}</h3>
            <div className="time-slots">
              {times.map((time) => (
                <button
                  key={time}
                  className={`time-slot ${selectedTime === time ? 'selected' : ''}`}
                  onClick={() => handleTimeChange(time)}
                >
                  {time}
                </button>
              ))}
            </div>
          </div>
        </div>
        <div className="service-details">
          <h2>Service Details</h2>
          <p><strong>{selectedService?.title}</strong></p>
          <p>{selectedDate.toDateString()} at {selectedTime}</p>
          <p>San Francisco</p>
          <p>Staff Member #1</p>
          <p>{selectedService?.duration}</p>
          <p>{selectedService?.price}</p>
          <button className="next-button">Next</button>
        </div>
      </div>
    </div>
  );
};

export default PersonalHealthManagement;
