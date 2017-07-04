using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Explosao : MonoBehaviour {

	[SerializeField]
	private float tempo;

	// Use this for initialization
	void Start () {

		if(GetComponent<AudioSource>() != null)
		{
			GetComponent<AudioSource>().Play();
		}

		Destroy(gameObject,tempo);	
	}
	
}
