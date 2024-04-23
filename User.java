package Main;

public class User {
	// Attributes
	private String userID;
	private String password;
	private String email;
	private String userType;

	// Constructor
	public User(String userID, String password, String email, String userType) {
		this.userID = userID;
		this.password = password;
		this.email = email;
		this.userType = userType;
	}

	// Getter and Setter for UserID
	public String getUserID() {
		return userID;
	}

	public void setUserID(String userID) {
		this.userID = userID;
	}

	// Getter and Setter for Password
	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	// Getter and Setter for Email
	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	// Getter and Setter for UserType
	public String getUserType() {
		return userType;
	}

	public void setUserType(String userType) {
		this.userType = userType;
	}

	// Operation: ResetPassword
	public void resetPassword(String newPassword) {
		this.password = newPassword;
		System.out.println("Password reset successfully.");
	}

	// Operation: CreateUser (Not sure what this operation is supposed to do, maybe
	// creating a new user?)
	// If you meant creating a new user object, it's done through the constructor.
}