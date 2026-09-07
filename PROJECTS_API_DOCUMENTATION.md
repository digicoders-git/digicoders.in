# 🚀 DigiCoders Projects REST API Documentation

This documentation provides details on how to integrate and display DigiCoders projects on any external website, web app, or mobile app using the Projects REST API.

---

## 📌 Overview & Features
- **Endpoint**: `/api/projects`
- **Format**: JSON (`application/json`)
- **HTTP Method**: `GET`
- **CORS Supported**: Enabled (`Access-Control-Allow-Origin: *`), allowing direct fetch from any domain without CORS errors.
- **Full Image URLs**: Returns absolute image links (`http://<your-domain>/public/uploads/projects/filename.jpg`) for seamless external rendering.

---

## 🌐 Endpoints

### 1. API Status & Index
- **URL**: `GET /api`
- **Description**: Returns API status and list of available endpoints.

#### **Sample Response**:
```json
{
    "status": true,
    "message": "DigiCoders API is running",
    "endpoints": {
        "projects": "https://digicoders.in/api/projects"
    }
}
```

---

### 2. Fetch Projects
- **URL**: `GET /api/projects`
- **Description**: Retrieves all active projects sorted by newest first (`id DESC`).

#### **Query Parameters (Optional)**

| Parameter | Type | Description | Example |
| :--- | :--- | :--- | :--- |
| `type` | String | Filter projects by category/type (e.g. `website`, `mobile`, `software`) | `?type=website` |
| `limit` | Integer | Limit maximum number of records returned | `?limit=6` |
| `offset` | Integer | Pagination offset starting index | `?offset=10` |

---

## 📥 Response Format

### **Success Response (`200 OK`)**

```json
{
    "status": true,
    "message": "Projects fetched successfully",
    "total": 12,
    "data": [
        {
            "id": "25",
            "title": "School Management System",
            "type": "Software",
            "image": "school-system-1709812345.jpg",
            "image_url": "https://digicoders.in/public/uploads/projects/school-system-1709812345.jpg",
            "url": "https://school.digicoders.in",
            "link_status": true,
            "add_date": "2024-03-05",
            "formatted_date": "Mar 2024",
            "status": "true"
        },
        {
            "id": "24",
            "title": "E-Commerce Mobile Application",
            "type": "Mobile",
            "image": "ecom-app-1709811111.jpg",
            "image_url": "https://digicoders.in/public/uploads/projects/ecom-app-1709811111.jpg",
            "url": "https://play.google.com/store/apps/details?id=com.example",
            "link_status": true,
            "add_date": "2024-02-28",
            "formatted_date": "Feb 2024",
            "status": "true"
        }
    ]
}
```

### **Response Fields Reference**

| Field | Type | Description |
| :--- | :--- | :--- |
| `id` | String | Unique Project ID |
| `title` | String | Title / Name of the project |
| `type` | String | Project Category (Website, Mobile App, Software, etc.) |
| `image` | String | Filename of the uploaded project banner/thumbnail |
| `image_url` | String | **Complete URL** to display image on external sites |
| `url` | String | Direct live link / URL of the project |
| `link_status` | Boolean | `true` if live link is active, `false` otherwise |
| `add_date` | String | Date added (`YYYY-MM-DD`) |
| `formatted_date` | String | Human readable date (e.g. `Mar 2024`) |
| `status` | String | Publication status (`true` / `false`) |

---

## 💻 Code Integration Examples

### 1. HTML & Vanilla JavaScript (`fetch`)

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Projects</title>
  <style>
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 20px;
    }
    .project-card {
      border: 1px solid #e2e8f0;
      border-radius: 12px;
      overflow: hidden;
      font-family: sans-serif;
    }
    .project-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
    .project-body {
      padding: 15px;
    }
    .badge {
      background: #ecfdf5;
      color: #046a38;
      font-size: 11px;
      font-weight: bold;
      padding: 4px 8px;
      border-radius: 4px;
    }
  </style>
</head>
<body>

  <h2>Recent Projects</h2>
  <div id="projects" class="projects-grid">Loading projects...</div>

  <script>
    const API_URL = 'https://digicoders.in/api/projects?limit=6';

    fetch(API_URL)
      .then(res => res.json())
      .then(response => {
        if (response.status && response.data.length > 0) {
          const container = document.getElementById('projects');
          container.innerHTML = response.data.map(item => `
            <div class="project-card">
              <img src="${item.image_url}" alt="${item.title}" />
              <div class="project-body">
                <span class="badge">${item.type}</span>
                <h3 style="font-size: 16px; margin: 10px 0 5px;">${item.title}</h3>
                <small style="color: #64748b;">${item.formatted_date || ''}</small>
                ${item.link_status && item.url ? `
                  <div style="margin-top: 10px;">
                    <a href="${item.url}" target="_blank" style="color: #2563eb; font-weight: bold;">Visit Website &rarr;</a>
                  </div>
                ` : ''}
              </div>
            </div>
          `).join('');
        }
      })
      .catch(err => {
        document.getElementById('projects').innerHTML = 'Failed to load projects.';
        console.error(err);
      });
  </script>
</body>
</html>
```

---

### 2. React / Next.js (Functional Component)

```jsx
import React, { useEffect, useState } from 'react';

export default function ProjectsList() {
  const [projects, setProjects] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    fetch('https://digicoders.in/api/projects')
      .then((res) => res.json())
      .then((data) => {
        if (data.status) {
          setProjects(data.data);
        }
        setLoading(false);
      })
      .catch((err) => {
        console.error(err);
        setLoading(false);
      });
  }, []);

  if (loading) return <div>Loading Projects...</div>;

  return (
    <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
      {projects.map((project) => (
        <div key={project.id} className="border rounded-xl p-4 shadow-sm">
          <img src={project.image_url} alt={project.title} className="w-full h-48 object-cover rounded-lg" />
          <span className="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded mt-3 inline-block">
            {project.type}
          </span>
          <h3 className="font-bold text-lg mt-2">{project.title}</h3>
          {project.link_status && project.url && (
            <a href={project.url} target="_blank" rel="noopener noreferrer" className="text-blue-600 font-semibold text-sm mt-2 inline-block">
              View Project &rarr;
            </a>
          )}
        </div>
      ))}
    </div>
  );
}
```

---

### 3. PHP Integration (cURL / `file_get_contents`)

```php
<?php
$apiUrl = 'https://digicoders.in/api/projects?type=website';

$json = @file_get_contents($apiUrl);
$response = json_decode($json, true);

if (!empty($response['status']) && !empty($response['data'])) {
    foreach ($response['data'] as $item) {
        echo '<div class="project-item">';
        echo '  <img src="' . htmlspecialchars($item['image_url']) . '" alt="' . htmlspecialchars($item['title']) . '">';
        echo '  <h3>' . htmlspecialchars($item['title']) . '</h3>';
        echo '  <p>Category: ' . htmlspecialchars($item['type']) . '</p>';
        if ($item['link_status'] && !empty($item['url'])) {
            echo '  <a href="' . htmlspecialchars($item['url']) . '" target="_blank">Visit Site</a>';
        }
        echo '</div>';
    }
} else {
    echo 'No projects found.';
}
?>
```

---

### 4. Python Integration (`requests`)

```python
import requests

url = "https://digicoders.in/api/projects"
params = {"limit": 5}

response = requests.get(url, params=params)
data = response.json()

if data.get("status"):
    for project in data.get("data", []):
        print(f"Title: {project['title']}")
        print(f"Category: {project['type']}")
        print(f"Image: {project['image_url']}")
        print(f"URL: {project['url']}")
        print("-" * 30)
```

---

### 5. Flutter / Dart Integration

```dart
import 'dart:convert';
import 'package:http/http.dart' as http;

Future<List<dynamic>> fetchProjects() async {
  final response = await http.get(Uri.parse('https://digicoders.in/api/projects'));

  if (response.statusCode == 200) {
    final body = jsonDecode(response.body);
    if (body['status'] == true) {
      return body['data'];
    }
  }
  return [];
}
```

---

## 🛡️ Error Handling

If an invalid route or server issue occurs, the response will follow standard status codes with error messages:

```json
{
    "status": false,
    "message": "No projects found matching the criteria"
}
```
