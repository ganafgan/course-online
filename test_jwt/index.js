const jwt = require('jsonwebtoken')
const JWT_SECRET = 'ganafgan123'

//create basic token syncronus
const token = jwt.sign({data: { kelas: 'bwamicro'}}, JWT_SECRET, {expiresIn: '5m'})
console.log(token)

// //asyncronus token
// jwt.sign({data: {kelas: 'bwamicro'}}, JWT_SECRET, {expiresIn: '5m'}, (err, token)=>{
//     console.log(token)
// })

const token1 = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjp7ImtlbGFzIjoiYndhbWljcm8ifSwiaWF0IjoxNjA3MDQ3NzU0LCJleHAiOjE2MDcwNDgwNTR9.qiy1ARq1-2hEEVcy1HQfQsexge2gmhhh6VHDMuwdwmI'
// jwt.verify(token1, JWT_SECRET, (err, decode)=>{
//     if (err) {
//         console.log(err.message)
//         return
//     }
//     console.log(decode)
// })

try {
    const decode = jwt.verify(token1, JWT_SECRET)
    console.log(decode)
} catch (error) {
    console.log(error.message)
}