# Developer Portfolio Presentation README

This README provides step-by-step instructions to set up, preview, and export the `portfolio_presentation.md` Markdown file as a presentation using Marp. Marp is a tool that converts Markdown into slideshows, supporting HTML and PDF exports. You can use either the Marp CLI (command-line tool) or the Marp for VS Code extension.

## Prerequisites
- **Node.js**: Install Node.js (version 16 or higher) from [https://nodejs.org/](https://nodejs.org/). Required for Marp CLI.
- **Presentation File**: Ensure `portfolio_presentation.md` is saved in a folder. Place image files (e.g., `image1.png`, `image2.png`, etc.) in the same folder, or update image paths in the Markdown file if they are elsewhere.
- **Chromium-based Browser** (for PDF export): Install Google Chrome or another Chromium-based browser for PDF export via Marp CLI.

## Option 1: Using Marp CLI
The Marp CLI allows you to preview and export the presentation from your terminal or command prompt.

1. **Install Marp CLI Globally**:
   - Open your terminal (Command Prompt on Windows, Terminal on Mac/Linux).
   - Run:
     ```bash
     npm install -g @marp-team/marp-cli
     ```
   - If you encounter permission errors on Mac/Linux, use:
     ```bash
     sudo npm install -g @marp-team/marp-cli
     ```

2. **Navigate to Your Presentation Folder**:
   - Use the `cd` command to go to the directory containing `portfolio_presentation.md`. Example:
     ```bash
     cd path/to/your/folder
     ```

3. **Preview the Presentation in Your Browser**:
   - Run:
     ```bash
     marp --preview portfolio_presentation.md
     ```
   - This opens a live preview in your default web browser. Navigate slides with arrow keys or mouse. Edit the `.md` file and save to auto-reload changes.

4. **Export to HTML**:
   - To create an HTML file for offline viewing or sharing, run:
     ```bash
     marp portfolio_presentation.md -o presentation.html
     ```
   - This generates `presentation.html` in the same folder. Open it in any browser.

5. **Export to PDF**:
   - To create a PDF for printing or submission, run:
     ```bash
     marp portfolio_presentation.md --pdf -o presentation.pdf
     ```
   - This generates `presentation.pdf`. Ensure a Chromium-based browser is installed.

6. **Customize the Presentation**:
   - Edit `portfolio_presentation.md` in a text editor to modify content or styles.
   - Re-run the preview or export commands to see updates.

## Option 2: Using Marp for VS Code
The Marp for VS Code extension provides a live preview and export options within the VS Code editor.

1. **Install the Marp Extension**:
   - Open VS Code.
   - Go to the Extensions view (`Ctrl+Shift+X` on Windows/Linux, `Cmd+Shift+X` on Mac).
   - Search for "Marp for VS Code" by Marp team and install it.

2. **Open the Presentation File**:
   - Open `portfolio_presentation.md` in VS Code.

3. **Preview the Presentation**:
   - Press `Ctrl+Shift+P` (or `Cmd+Shift+P` on Mac) to open the Command Palette.
   - Type and select "Marp: Preview" or click the preview icon in the top-right of the editor.
   - This shows a live slideshow preview in a side panel. Edit the file to see updates instantly.

4. **Export to HTML or PDF**:
   - Open the Command Palette (`Ctrl+Shift+P` or `Cmd+Shift+P`).
   - Search for and select "Marp: Export slide deck".
   - Choose HTML or PDF and save the file to your desired location.

## Troubleshooting
- **Images Not Displaying?** Verify that image files (`image1.png`, `image2.png`, etc.) are in the same folder as `portfolio_presentation.md`, or update paths in the Markdown (e.g., `![Inspiring Site](image1.png)` to `![Inspiring Site](path/to/image1.png)`).
- **Installation Errors?** Confirm Node.js is installed (`node -v`). Update npm if needed:
  ```bash
  npm install -g npm