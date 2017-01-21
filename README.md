# Codeigniter-Highcharts

##Demo can see at the Admin Panel --> http://www.cmap.x10host.com
Or see this Pic. 
#https://postimg.org/image/fpw6h2dh9/
#https://postimg.org/image/90pn11s59/
#https://postimg.org/image/miwjdc4al/

Line Chart, Pie Chart in Codeigniter using Highcharts


This will Get data from Database by Month & Year and show in Highcharts.




#Table Structure
--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(70) NOT NULL, 
  `password` varchar(70) NOT NULL, 
  `fname` varchar(70) NOT NULL, 
  `lname` varchar(70) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `date`) VALUES
(1, 'user1', 'user1', 'FName', 'LName', '2016-10-09'),
(2, 'user2', 'user2', 'FName', 'LName', '2016-10-09'),
(3, 'user3', 'user3', 'FName', 'LName', '2016-11-12'),
(4, 'user4', 'user4', 'FName', 'LName', '2016-11-12'),
(5, 'user5', 'user5', 'FName', 'LName', '2016-12-12');

--
--
--
