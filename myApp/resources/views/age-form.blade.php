<div style="padding: 40px;">
    <div style="background: #fff3cd; padding: 30px; border-radius: 8px; max-width: 600px; margin: 0 auto;">
        <h1 style="color: #856404;">Age Verification Required</h1>
        <p style="font-size: 16px; color: #856404; margin-bottom: 20px;">
            Heading 2 is restricted to users 18 years or older. Please enter your age to continue.
        </p>
        
        <form action="{{ route('heading2.verify') }}" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf
            
            <div>
                <label for="age" style="display: block; margin-bottom: 8px; font-weight: bold;">Your Age:</label>
                <input type="number" id="age" name="age" min="1" max="120" required style="width: 100%; padding: 10px; border: 2px solid #856404; border-radius: 5px; font-size: 16px;">
            </div>
            
            <button type="submit" style="padding: 12px; background: #dc3545; color: white; border: none; border-radius: 5px; font-size: 16px; font-weight: bold; cursor: pointer;">
                Verify Age
            </button>
        </form>
        
        <a href="{{ route('headings') }}" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; border-radius: 5px;">
            Back to Headings
        </a>
    </div>
</div>
