<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cocopan | Fresh Bread & Coffee</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Moodboard hover underline animation */
    .underline-animate {
      position: relative;
      transition: color 0.3s ease;
    }
    .underline-animate::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -3px;
      width: 0%;
      height: 2px;
      background-color: #facc15; /* Tailwind yellow-500 */
      transition: width 0.3s ease;
    }
    .underline-animate:hover::after {
      width: 100%;
    }
  </style>
</head>