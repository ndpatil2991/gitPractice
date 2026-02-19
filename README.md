# Images Folder

## Current Setup
The website currently uses placeholder images from Unsplash CDN (requires internet).

## To Add Your Own Images:

1. **Place your images here** in this `/images` folder

2. **Update HTML files** to reference your images:
   ```html
   <!-- Change from: -->
   <img src="https://images.unsplash.com/photo-..." alt="Property">
   
   <!-- To: -->
   <img src="images/your-image.jpg" alt="Property">
   ```

3. **Recommended Sizes:**
   - Property cards: 800x600px
   - Property details: 1200x800px
   - Agent photos: 400x400px (square)

4. **Supported formats:** .jpg, .png, .webp, .gif

## Tips:
- Keep file sizes under 500KB for fast loading
- Use descriptive filenames: `agent-sarah.jpg`, `property-villa-1.jpg`
- Compress images using tools like TinyPNG before uploading
