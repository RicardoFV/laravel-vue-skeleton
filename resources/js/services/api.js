import axios from 'axios'

export default axios.create({
  baseURL: 'http://localhost:8000/api/',
  timeout: 3000,
  headers: {
    'Content-Type': 'application/json;multipart/form-data;',
  },
})
