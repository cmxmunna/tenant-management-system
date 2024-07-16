<?php 

require_once 'db_connect.php';

// Room DB
function showallrooms()
{
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `roominfo` ';
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function onlyShowableRooms()
{
	$conn = db_conn();
    $selectQuery = "SELECT * FROM `roominfo` where booked = 'No'";
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showroom($room_id)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `roominfo` where room_id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$room_id]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

// Room Image Change
function updateRoomImage($room_id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE roominfo SET image = ? where room_id = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        $data['image'], $room_id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

    // Room Booking info Update
    function updateRoomBookingInfo($data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE roominfo SET booked = ? where room_no = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['booked'], $data['room_no']]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }

//Add Rooms
function addroom($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into roominfo (room_id, house_address, room_no, rent, room_details, booked, image)
    VALUES (:room_id, :house_address, :room_no, :rent, :room_details, :booked, :image)";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':room_id' => $data['room_id'],
        	':house_address' => $data['house_address'],
        	':room_no' => $data['room_no'],
        	':rent' => $data['rent'],
        	':room_details' => $data['room_details'],
            ':booked' => $data['booked'],
            ':image' => $data['image']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function deleteroom($room_id)
{
	$conn = db_conn();
    $selectQuery = "DELETE FROM `roominfo` WHERE `room_id` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$room_id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

// INTERNET PACK CRUD END