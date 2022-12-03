// https://leetcode.com/problems/divide-two-integers/

/**
 * @param {number} dividend
 * @param {number} divisor
 * @return {number}
 */
let divide = (dividend, divisor)=> {
    let sign = (dividend < 0) ^ (divisor < 0) ? -1 : 1;
    dividend = Math.abs(dividend);
    divisor = Math.abs(divisor);
    let quotient = 0;
    while (dividend >= divisor) {
        dividend -= divisor;
        quotient++;
    }
    return sign * quotient;
}

// get json from api server and parse it or return error
let getJson = async (url)=> {
    let response = await fetch(url);
    if (response.ok) {
        return await response.json();
    } else {
        throw new Error("HTTP error " + response.status);
    }
}

// fetch json post data from api server and parse it or return error
let postJson = async (url, data)=> {
    let response = await fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json;charset=utf-8"
        },
        body: JSON.stringify(data)
    });
    if (response.ok) {
        return await response.json();
    } else {
        throw new Error("HTTP error " + response.status);
    }
}

// draw numbers on canvas
let drawNumbers = (canvas, numbers)=> {
    let ctx = canvas.getContext("2d");
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.font = "30px Arial";
    ctx.fillStyle = "blue";
    for (let i = 0; i < numbers.length; i++) {
        ctx.fillText(numbers[i], 10, 30 * (i + 1));
    }
}

//get data from canvas
let getCanvasData = (canvas)=> {
    let ctx = canvas.getContext("2d");
    return ctx.getImageData(0, 0, canvas.width, canvas.height);
}

// draw data on canvas
let drawCanvasData = (canvas, data)=> {
    let ctx = canvas.getContext("2d");
    ctx.putImageData(data, 0, 0);
}